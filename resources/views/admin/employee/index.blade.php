@extends('layouts.admin.app')

@section('title', 'Manage User')

@section('css')
<style>
    #domain-loader {
        font-size: 12px;
    }
    
    #domain-details .card {
        font-size: 12px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    #domain-details .badge {
        font-size: 10px;
    }
    
    .domain-verification-success {
        border-color: #28a745 !important;
    }
    
    .domain-verification-error {
        border-color: #dc3545 !important;
    }
</style>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">User</li>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card" id="add_brand">
                    <form action="{{route('user.store')}}" method="POST" id="" class="modal-content" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="from_index" value="1">
                        <div class="card-body row">
                            <div class="col-md-3 mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" autofocus  placeholder="Name" oninput="this.value = this.value.toUpperCase()" class="form-control" required>
                            </div>
                            <div class="col-md-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
                            </div>
                            <div class="col-md-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                                <div class="show-hide toggle-password"><span class="show"></span></div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="logo">Logo</label>
                                <input type="file" name="logo" id="logo" class="form-control" accept="image/*">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="background_colour">Background Colour</label>
                                <input type="color" name="background_colour" id="background_colour" value="#ffffff" class="form-control">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="domain">Domain</label>
                                <input type="url" name="domain" id="domain" placeholder="https://example.com" class="form-control">
                                <div id="domain-loader" style="display: none;" class="mt-2">
                                    <i class="fas fa-spinner fa-spin text-primary"></i> <small class="text-muted">Checking domain...</small>
                                </div>
                                <div id="domain-details" style="display: none;" class="mt-2">
                                    <!-- Domain details will be populated here -->
                                </div>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="points">Points</label>
                                <input type="number" name="points" id="points" placeholder="0" value="0" min="0" class="form-control">
                            </div>
                            
                            <div class="col-md-3">
                                <label for="add_data">&nbsp;</label>
                               <button type="submit" id="add_data" class="btn btn-primary w-100" >Add +</button>
                            </div>
                           
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div  id="basic-2_wrapper" class="dataTables_wrapper px-2" onchange="get_datatable()">
                            <div class="dataTables_length">
                                <label>Show 
                                    <select name="basic-2_value"  id="basic-2_value" aria-controls="basic-2" class="form-control form-control-sm">
                                        <option value="50">50</option>
                                        <option value="250">250</option>
                                        <option value="500">500</option>
                                        <option value="1000">1000</option>
                                    </select> entries
                                </label>
                            </div>
                            <div class="dataTables_filter">
                                <label>Search:
                                    <input type="search"  id="basic-2_search" class="form-control form-control-sm" placeholder="Search" aria-controls="basic-2" data-bs-original-title="" title="">
                                </label>
                                
                            </div>
                        </div>
                        <div class="dt-ext" id="get_datatable">
                            <div class="loader-box"><div class="loader-37"></div></div>
                            
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- All Client Table End -->
    </div>


    <div class="modal fade" id="edit_modal" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog" id="ajax_html">
            
        </div>
    </div>

    <audio id="myAudio" controls class="d-none">
        <source src="{{ asset('audio/Beep.wav') }}" type="audio/wav">
    </audio>
@endsection
@section('script')
    <script>
      $(document).ready(function () {
        $(document).on('click', '.show-hide', function () {
            var $wrapper = $(this).closest('.form-group, .password-wrapper');
            var $input = $wrapper.find('input');
            var $toggle = $(this).find('.toggle-password');

            if ($input.attr('type') === 'password') {
                $input.attr('type', 'text');
                $toggle.text('Hide');
            } else {
                $input.attr('type', 'password');
                $toggle.text('Show');
            }
        });
    });
        $(document).ready(function(){
            get_datatable();
            $("#name").focus();
        });

        $(document).on('click','.pages a',function(n){
            n.preventDefault();
            var page = $(this).attr('href').split("page=")[1];
            get_datatable(page);
        });
       
        function get_datatable(page){
            $('#get_datatable').html('<div class="loader-box"><div class="loader-37"></div></div>');
            var value = $('#basic-2_value').val();
            var search = $('#basic-2_search').val();
            var page = page ?? 1;
            $.get('{{ route("user.datatable") }}?page='+page+'&value='+value+'&search='+search+'', { _token: "{{csrf_token() }}"}, function(data){
                $('#get_datatable').html(data);
                $('#basic-test').DataTable({ dom: 'Brt', "pageLength": -1 , responsive: true,});
            });
        }

        function edit_modal(id,key_value){
            var url = "{{route('user.edit_modal',":id")}}";
            url = url.replace(':id',id);
            $('#ajax_html').html('<div class="loader-box"><div class="loader-37"></div></div>');
            $.get(url,{key_value:key_value}, function(data){
                $('#ajax_html').html(data);
                $('.js-example-basic-multiple').select2();
            });
        }

        $(document).on('submit','form',function(event){
            event.preventDefault();
            var form = event.target;
            var form_data = new FormData(form);
            $('form button[type="submit"]').addClass('disabled');
            $.ajax({
                url: $(event.target).attr('action'),
                type: 'POST',
                data: form_data,
                processData: false,
                contentType: false,
                success: function(data){
                    if(data.result == 1){
                        $.notify({ title:'Success', message:data.message }, { type:'success', });
                        var page = Number($(".pages").find('span[aria-current="page"] span').text());
                        $('#name').val('');
                        $('#email').val('');
                        $('#password').val('');
                        $('#logo').val('');
                        $('#background_colour').val('#ffffff');
                        $('#domain').val('');
                        $('#domain-details').hide();
                        $('#points').val('0');
                        $('#department_id').val('').trigger('change');
                        $('#category_id').val('').trigger('change');
                        $('form button[type="submit"]').html('Save');
                        $('form button[type="submit"]').removeClass('disabled');
                        get_datatable(page);
                        $('#edit_modal').modal('hide');
                    }else{
                        $.notify({ title:'Error', message:data.message }, { type:'danger', });
                        $('form button[type="submit"]').html('Save');
                        $('form button[type="submit"]').removeClass('disabled');
                    }
                }
            });
        });
        function delete_user(id){
            swal({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    var url = "{{route('user.delete',":id")}}";
                    url = url.replace(':id',id);
                    $.get(url, function(data){
                        if(data.result == 1){
                            var page = Number($(".pages").find('span[aria-current="page"] span').text());
                            get_datatable(page);
                            $.notify({ title:'Deleted', message:data.message}, { type:'danger', });
                        }
                    })
                }
            })
        }
        function change_status(id){
            var url = "{{route('user.change_status',":id")}}";
            url = url.replace(':id',id);
            $.get(url, function(data){
                if(data.result == 1){
                    $.notify({ title:'Status!', message:data.message }, { type:'info', });
                }
            })
        }

        // Domain validation with real-time checking
        let domainTimeout;
        
        document.getElementById('domain').addEventListener('input', function() {
            const domain = this.value.trim();
            
            // Clear previous timeout
            if (domainTimeout) {
                clearTimeout(domainTimeout);
            }
            
            // Hide previous results
            document.getElementById('domain-details').style.display = 'none';
            
            if (domain && domain.length > 3) {
                // Set timeout for 1 second delay after user stops typing
                domainTimeout = setTimeout(() => {
                    fetchDomainDetails(domain);
                }, 1000);
            }
        });

        document.getElementById('domain').addEventListener('blur', function() {
            const domain = this.value.trim();
            
            if (domain && domain.length > 3) {
                fetchDomainDetails(domain);
            }
        });

        async function fetchDomainDetails(domain) {
            const loader = document.getElementById('domain-loader');
            const detailsDiv = document.getElementById('domain-details');
            
            loader.style.display = 'block';
            detailsDiv.style.display = 'none';
            
            try {
                const response = await fetch(`/api/domain/details?domain=${encodeURIComponent(domain)}`);
                const data = await response.json();
                
                if (data.success) {
                    displayDomainDetails(data.details);
                } else {
                    displayError(data.message);
                }
            } catch (error) {
                displayError('Network error: Unable to verify domain');
            } finally {
                loader.style.display = 'none';
            }
        }

        function displayDomainDetails(details) {
            const detailsDiv = document.getElementById('domain-details');
            
            let statusColor = details.is_valid && details.is_reachable ? 'success' : 'danger';
            let sslIcon = details.has_ssl ? '🔒' : '🔓';
            let reachableIcon = details.is_reachable ? '✅' : '❌';
            
            detailsDiv.innerHTML = `
                <div class="card border-${statusColor} mt-2">
                    <div class="card-body p-2">
                        
                        <div class="row">
                            <div class="col-6">
                                <small><strong>Status:</strong> <span class="badge bg-${statusColor}">${details.is_valid && details.is_reachable ? 'Valid' : 'Invalid'}</span></small><br>
                                <small><strong>Reachable:</strong> ${details.is_reachable ? '✅ Yes' : '❌ No'}</small><br>
                                ${details.ip_address ? `<small><strong>IP:</strong> ${details.ip_address}</small><br>` : ''}
                            </div>
                            <div class="col-6">
                                <small><strong>SSL:</strong> ${sslIcon} ${details.has_ssl ? 'Secured' : 'Not Secured'}</small><br>
                                <small><strong>Response:</strong> ${details.response_time}ms</small><br>
                                ${details.status_code ? `<small><strong>Status:</strong> ${details.status_code}</small>` : ''}
                            </div>
                        </div>
                        ${details.title ? `<small class="text-muted"><strong>Title:</strong> ${details.title.substring(0, 50)}...</small><br>` : ''}
                        ${details.error ? `<small class="text-danger"><strong>Error:</strong> ${details.error}</small>` : ''}
                    </div>
                </div>
            `;
            detailsDiv.style.display = 'block';
        }

        function displayError(message) {
            const detailsDiv = document.getElementById('domain-details');
            detailsDiv.innerHTML = `
                <div class="alert alert-danger py-2">
                    <small><strong>Error:</strong> ${message}</small>
                </div>
            `;
            detailsDiv.style.display = 'block';
        }

    </script>
@endsection
