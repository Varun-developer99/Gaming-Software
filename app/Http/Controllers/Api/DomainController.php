<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DomainController extends Controller
{
    public function getDomainDetails(Request $request)
    {
        $domain = $request->input('domain');
        
        if (!$domain) {
            return response()->json(['success' => false, 'message' => 'Domain is required']);
        }

        $domain = $this->cleanDomain($domain);
        
        $details = [
            'is_valid' => $this->isValidDomain($domain),
            'is_reachable' => false,
            'has_ssl' => false,
            'ip_address' => null,
            'response_time' => null
        ];

        if ($details['is_valid']) {
            $details['ip_address'] = gethostbyname($domain);
            $reachabilityData = $this->checkReachability($domain);
            $details = array_merge($details, $reachabilityData);
        }

        return response()->json([
            'success' => true,
            'details' => $details
        ]);
    }

    private function cleanDomain($domain)
    {
        $domain = strtolower(trim($domain));
        $domain = preg_replace('/^https?:\/\//', '', $domain);
        $domain = preg_replace('/\/.*$/', '', $domain);
        return $domain;
    }

    private function isValidDomain($domain)
    {
        return filter_var($domain, FILTER_VALIDATE_DOMAIN, FILTER_FLAG_HOSTNAME) !== false;
    }

    private function checkReachability($domain)
    {
        $startTime = microtime(true);
        $result = [
            'is_reachable' => false,
            'has_ssl' => false,
            'response_time' => null,
            'status_code' => null,
            'error' => null
        ];
        
        try {
            // Check HTTP first
            $response = Http::timeout(8)->get("http://{$domain}");
            $result['is_reachable'] = $response->successful();
            $result['status_code'] = $response->status();
            $result['response_time'] = round((microtime(true) - $startTime) * 1000, 2);
            
            // Check HTTPS/SSL
            try {
                $httpsResponse = Http::timeout(5)->get("https://{$domain}");
                $result['has_ssl'] = $httpsResponse->successful();
            } catch (\Exception $e) {
                $result['has_ssl'] = false;
            }
            
        } catch (\Exception $e) {
            $result['error'] = 'Connection failed: ' . $e->getMessage();
            $result['response_time'] = round((microtime(true) - $startTime) * 1000, 2);
        }

        return $result;
    }
}