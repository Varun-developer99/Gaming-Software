@extends('layouts.front.app')

@section('title', 'Dargon Tiger')
<style>
        
    </style>
</head>
    <div class="game-container">
        <!-- Player Info -->
        <div class="player-info mt-5">
            <div>
                <div class="balance">💰 Balance: ₹<span id="playerBalance">50,000</span></div>
                <small class="text-muted">Total Wallet Amount</small>
            </div>
            <div class="game-stats">
                <div class="stat-item">
                    <div class="stat-value" id="totalWins">0</div>
                    <div class="stat-label">Wins</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value" id="totalGames">0</div>
                    <div class="stat-label">Games</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value" id="winRate">0%</div>
                    <div class="stat-label">Win Rate</div>
                </div>
            </div>
        </div>

        <!-- Game Header -->
        <div class="game-header">
            <h1 class="game-title gaming-font">🐲 DRAGON TIGER 🐅</h1>
            <p class="lead">Place your bets and win big!</p>
        </div>

        <!-- Game Table -->
            
        <div class="row">
            <div class="game-table col-sm-8">
                <div class="roundtimer-info py-1">
                    <div class="timer">⏳ Time Left: <span id="timer">40</span>s</div>
                    <div class="round-number">🔄 Round: <span id="roundNumber">1</span></div>
                </div>
                <!-- Betting Section -->
                <div class="betting-section">
                    <!-- Dragon Betting Area -->
                    <div class="bet-area dragon-area" data-bet="dragon">
                        <span class="bet-icon">🐲</span>
                        <div class="bet-title">Dragon</div>
                        <div class="bet-amount">₹<span>0</span></div>
                    </div>

                    <!-- Tie Betting Area -->
                    <div class="bet-area tie-area" data-bet="tie">
                        <span class="bet-icon">🤝</span>
                        <div class="bet-title">Tie</div>
                        <div class="bet-amount">₹<span>0</span></div>
                    </div>

                    <!-- Tiger Betting Area -->
                    <div class="bet-area tiger-area" data-bet="tiger">
                        <span class="bet-icon">🐅</span>
                        <div class="bet-title">Tiger</div>
                        <div class="bet-amount">₹<span>0</span></div>
                    </div>
                </div>

                <!-- Playing Cards -->
                <div class="row">
                <div id="cardsContainer-dragon" class="col-sm-6"></div>

                <div id="cardsContainer-tiger" class="col-sm-6"></div>
                </div>   
                <!-- Card Display -->
                <div class="card-display">
                    <!-- Dragon Card -->
                    <div class="card-slot" id="dragonCard">
                        <div class="placeholder-text">Dragon Card</div>
                    </div>

                    <!-- VS Divider -->
                    <div class="vs-divider gaming-font">VS</div>

                    <!-- Tiger Card -->
                    <div class="card-slot" id="tigerCard">
                        <div class="placeholder-text">Tiger Card</div>
                    </div>
                </div>

                <!-- Game Controls -->
                <div class="game-controls">
                    <button class="control-btn" id="dealBtn">
                        <i class="bi bi-play-circle"></i> Deal Cards
                    </button>
                    <button class="control-btn d-none" id="clearBetsBtn">
                        <i class="bi bi-x-circle"></i> Clear Bets
                    </button>
                    <button class="control-btn d-none" id="historyBtn">
                        <i class="bi bi-clock-history"></i> History
                    </button>
                    <button class="control-btn" id="newGameBtn" style="display: none;">
                        <i class="bi bi-arrow-repeat"></i> New Game
                    </button>
                </div>
            </div>
        <!-- Game History Modal -->
            <div class="col-sm-4">
                <div class="game-history">
                    <h5 class="gaming-font">My Bets</h5>
                    <div id="historyContent" class="history-content">
                        <div class="table table-striped">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Nation</th>
                                        <th>Rate</th>
                                        <th>Amount</th>
                                        <th>Place Date</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody id="historyTableBody">
                                    <!-- Game history records will be dynamically inserted here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

    <!-- Betting Modal -->
    <div class="modal fade" id="bettingModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title gaming-font">
                        <span id="modalBetIcon">🐲</span>
                        Place Your Bet on <span id="modalBetName">Dragon</span>
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <h6>Select Bet Amount</h6>
                        <p class="text-muted">Current Balance: ₹<span id="modalBalance">50,000</span></p>
                    </div>

                    <!-- Preset Amount Buttons -->
                    <div class="bet-amount-grid">
                        <button class="amount-btn" data-amount="5">₹5</button>
                        <button class="amount-btn" data-amount="10">₹10</button>
                        <button class="amount-btn" data-amount="20">₹20</button>
                        <button class="amount-btn" data-amount="50">₹50</button>
                        <button class="amount-btn" data-amount="100">₹100</button>
                        <button class="amount-btn" data-amount="200">₹200</button>
                    </div>

                    <!-- Custom Amount Input -->
                    <div class="mt-3">
                        <label class="form-label">Or Enter Custom Amount:</label>
                        <input type="number" class="custom-amount-input form-control" id="customAmount" placeholder="Enter amount..." min="50" max="50000">
                    </div>

                    <!-- Selected Amount Display -->
                    <div class="mt-3 text-center">
                        <h6>Selected Amount: ₹<span id="selectedAmount">0</span></h6>
                        <small class="text-muted">Potential Win: ₹<span id="potentialWin">0</span></small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn control-btn" id="confirmBetBtn">
                        <i class="bi bi-check-circle"></i> Confirm Bet
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Result Modal -->
    <div class="modal fade" id="resultModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title gaming-font" id="resultTitle">Game Result</h5>
                </div>
                <div class="modal-body text-center">
                    <div id="resultContent">
                        <!-- Result content will be inserted here -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn control-btn" data-bs-dismiss="modal">Continue</button>
                </div>
            </div>
        </div>
    </div>
</div>



@endsectionontinue Playing</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/firstgame.css') }}">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        // Game State
        let gameState = {
            balance: 50000,
            bets: { dragon: 0, tiger: 0, tie: 0 },
            currentBet: null,
            totalGames: 0,
            totalWins: 0,
            isGameActive: false,
            gameHistory: []
        };

        // Card deck
        const suits = ['♠️', '♥️', '♦️', '♣️'];
        const values = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
        const cardValues = { 'A': 1, '2': 2, '3': 3, '4': 4, '5': 5, '6': 6, '7': 7, '8': 8, '9': 9, '10': 10, 'J': 11, 'Q': 12, 'K': 13 };

        // Initialize game
        document.addEventListener('DOMContentLoaded', function() {
            updateUI();
            addEventListeners();
            
            // Handle modal events
            const bettingModal = document.getElementById('bettingModal');
            bettingModal.addEventListener('hidden.bs.modal', function () {
                // Clear form when modal is closed
                document.getElementById('selectedAmount').textContent = '0';
                document.getElementById('customAmount').value = '';
                document.querySelectorAll('.amount-btn').forEach(btn => btn.classList.remove('selected'));
            });
            
            // Start first timer after a short delay
            setTimeout(() => {
                startTimer();
            }, 1000);
        });

        function addEventListeners() {
            // Betting area clicks
            document.querySelectorAll('.bet-area').forEach(area => {
                area.addEventListener('click', function() {
                    if (bettingPhase && !gameState.isGameActive) {
                        const betType = this.getAttribute('data-bet');
                        openBettingModal(betType);
                    } else if (!bettingPhase) {
                        alert('Betting time is over! Wait for next round.');
                    } else if (gameState.isGameActive) {
                        alert('Game is in progress! Wait for next round.');
                    }
                });
            });

            // Amount button clicks
            document.querySelectorAll('.amount-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    document.querySelectorAll('.amount-btn').forEach(b => b.classList.remove('selected'));
                    this.classList.add('selected');
                    const amount = parseInt(this.getAttribute('data-amount'));
                    document.getElementById('selectedAmount').textContent = amount;
                    document.getElementById('customAmount').value = amount;
                    updatePotentialWin(amount);
                });
            });

            // Custom amount input
            document.getElementById('customAmount').addEventListener('input', function() {
                const amount = parseInt(this.value) || 0;
                document.getElementById('selectedAmount').textContent = amount;
                document.querySelectorAll('.amount-btn').forEach(b => b.classList.remove('selected'));
                updatePotentialWin(amount);
            });

            // Confirm bet button
            document.getElementById('confirmBetBtn').addEventListener('click', confirmBet);

            // Control buttons
            document.getElementById('dealBtn').addEventListener('click', dealCards);
            document.getElementById('clearBetsBtn').addEventListener('click', clearBets);
            document.getElementById('newGameBtn').addEventListener('click', newGame);
        }

        function openBettingModal(betType) {
            if (!bettingPhase) {
                alert('Betting time is over! Wait for next round.');
                return;
            }
            
            gameState.currentBet = betType;
            
            // Update modal content
            const icons = { dragon: '🐲', tiger: '🐅', tie: '🤝' };
            const names = { dragon: 'Dragon', tiger: 'Tiger', tie: 'Tie' };
            
            document.getElementById('modalBetIcon').textContent = icons[betType];
            document.getElementById('modalBetName').textContent = names[betType];
            document.getElementById('modalBalance').textContent = gameState.balance.toLocaleString();
            
            // Reset modal form
            document.querySelectorAll('.amount-btn').forEach(b => b.classList.remove('selected'));
            document.getElementById('selectedAmount').textContent = '0';
            document.getElementById('potentialWin').textContent = '0';
            document.getElementById('customAmount').value = '';
            
            // Show modal
            new bootstrap.Modal(document.getElementById('bettingModal')).show();
        }

        function updatePotentialWin(amount) {
            const multipliers = { dragon: 2, tiger: 2, tie: 9 };
            const potentialWin = amount * multipliers[gameState.currentBet];
            document.getElementById('potentialWin').textContent = potentialWin.toLocaleString();
        }

        function confirmBet() {
            const amount = parseInt(document.getElementById('selectedAmount').textContent);
            
            if (amount <= 0 || amount > gameState.balance) {
                alert('Invalid bet amount!');
                return;
            }
            
            // Place bet
            gameState.bets[gameState.currentBet] += amount;
            gameState.balance -= amount;
            
            // Update UI
            updateUI();
            updateBetDisplay();
            
            // Close modal properly
            bootstrap.Modal.getInstance(document.getElementById('bettingModal')).hide();
            // const modalElement = document.getElementById('bettingModal');
            // const modalInstance = bootstrap.Modal.getInstance(modalElement) || new bootstrap.Modal(modalElement);
            // modalInstance.hide();
            
            // // Clear modal form
            // document.getElementById('selectedAmount').textContent = '0';
            // document.getElementById('customAmount').value = '';
            // document.querySelectorAll('.amount-btn').forEach(btn => btn.classList.remove('selected'));
        }

        function updateBetDisplay() {
            Object.keys(gameState.bets).forEach(betType => {
                const betArea = document.querySelector(`[data-bet="${betType}"]`);
                const amountDisplay = betArea.querySelector('.bet-amount span');
                
                if (gameState.bets[betType] > 0) {
                    betArea.classList.add('has-bet', 'active');
                    amountDisplay.textContent = gameState.bets[betType].toLocaleString();
                } else {
                    betArea.classList.remove('has-bet', 'active');
                    amountDisplay.textContent = '0';
                }
            });
        }

        function dealCards() {
            if (Object.values(gameState.bets).every(bet => bet === 0)) {
                alert('Please place a bet first!');
                return;
            }

            gameState.isGameActive = true;
            document.getElementById('dealBtn').disabled = true;
            document.getElementById('clearBetsBtn').disabled = true;

            // Generate random cards
            const dragonCard = generateRandomCard();
            const tigerCard = generateRandomCard();

            // Display cards with animation
            setTimeout(() => displayCard('dragonCard', dragonCard), 500);
            setTimeout(() => displayCard('tigerCard', tigerCard), 1000);
            
            // Determine winner and show results
            setTimeout(() => {
                const result = determineWinner(dragonCard, tigerCard);
                showResult(result, dragonCard, tigerCard);
            }, 2000);
        }

        function generateRandomCard() {
            const suit = suits[Math.floor(Math.random() * suits.length)];
            const value = values[Math.floor(Math.random() * values.length)];
            return { suit, value, numericValue: cardValues[value] };
        }

        function displayCard(slotId, card) {
            const slot = document.getElementById(slotId);
            slot.innerHTML = `
                <div class="card-display">
                    <div class="card-value">${card.value}</div>
                    <div class="card-suit">${card.suit}</div>
                </div>
            `;
            slot.classList.add('card-revealed');
        }

        function determineWinner(dragonCard, tigerCard) {
            if (dragonCard.numericValue > tigerCard.numericValue) {
                return 'dragon';
            } else if (tigerCard.numericValue > dragonCard.numericValue) {
                return 'tiger';
            } else {
                return 'tie';
            }
        }

        function showResult(winner, dragonCard, tigerCard) {
            gameState.totalGames++;
            
            // Calculate winnings
            let totalWin = 0;
            const multipliers = { dragon: 2, tiger: 2, tie: 9 };
            
            if (gameState.bets[winner] > 0) {
                totalWin = gameState.bets[winner] * multipliers[winner];
                gameState.balance += totalWin;
                gameState.totalWins++;
            }
            
            // Add to history
            gameState.gameHistory.unshift({
                winner,
                dragonCard: `${dragonCard.value}${dragonCard.suit}`,
                tigerCard: `${tigerCard.value}${tigerCard.suit}`,
                winAmount: totalWin
            });
            
            if (gameState.gameHistory.length > 10) {
                gameState.gameHistory.pop();
            }
            
            // Show result modal
            const resultContent = document.getElementById('resultContent');
            const winnerNames = { dragon: 'Dragon', tiger: 'Tiger', tie: 'Tie' };
            const winnerIcons = { dragon: '🐲', tiger: '🐅', tie: '🤝' };
            
            resultContent.innerHTML = `
                <div class="result-winner">
                    <div class="winner-icon">${winnerIcons[winner]}</div>
                    <h3>${winnerNames[winner]} Wins!</h3>
                </div>
                <div class="cards-result">
                    <div class="card-result">
                        <h5>Dragon</h5>
                        <div class="card">${dragonCard.value}${dragonCard.suit}</div>
                    </div>
                    <div class="card-result">
                        <h5>Tiger</h5>
                        <div class="card">${tigerCard.value}${tigerCard.suit}</div>
                    </div>
                </div>
                ${totalWin > 0 ? `<div class="win-amount">You Won: ₹${totalWin.toLocaleString()}</div>` : ''}
            `;
            
            new bootstrap.Modal(document.getElementById('resultModal')).show();
            
            // Reset for next game
            setTimeout(() => {
                newGame();
            }, 3000);
        }

        function clearBets() {
            // Return bet amounts to balance
            Object.values(gameState.bets).forEach(bet => {
                gameState.balance += bet;
            });
            
            // Reset bets
            gameState.bets = { dragon: 0, tiger: 0, tie: 0 };
            
            updateUI();
            updateBetDisplay();
        }

        function newGame() {
            gameState.isGameActive = false;
            gameState.bets = { dragon: 0, tiger: 0, tie: 0 };
            
            // Reset UI
            document.getElementById('dragonCard').innerHTML = '<div class="placeholder-text">Dragon Card</div>';
            document.getElementById('tigerCard').innerHTML = '<div class="placeholder-text">Tiger Card</div>';
            document.getElementById('dragonCard').classList.remove('card-revealed');
            document.getElementById('tigerCard').classList.remove('card-revealed');
            
            // Remove winner/loser effects
            document.querySelectorAll('.bet-area').forEach(area => {
                area.classList.remove('winner-glow', 'loser-fade', 'has-bet', 'active');
            });
            
            updateUI();
            updateBetDisplay();
            
            // Clear any existing timer
            if (timerInterval) {
                clearInterval(timerInterval);
            }
            
            // Start new timer immediately
            setTimeout(() => {
                startTimer();
            }, 1000);
        }

        function updateUI() {
            document.getElementById('balance').textContent = gameState.balance.toLocaleString();
            document.getElementById('totalGames').textContent = gameState.totalGames;
            document.getElementById('totalWins').textContent = gameState.totalWins;
            
            // Update win rate
            const winRate = gameState.totalGames > 0 ? ((gameState.totalWins / gameState.totalGames) * 100).toFixed(1) : 0;
            document.getElementById('winRate').textContent = winRate + '%';
        }

        // Timer-based automatic game flow
        let gameTimer = 40;
        let currentRound = 0;
        let timerInterval;
        let bettingPhase = true;

        function startTimer() {
            gameTimer = 40;
            bettingPhase = true;
            currentRound++;
            
            document.getElementById('timer').textContent = gameTimer;
            document.getElementById('roundNumber').textContent = currentRound;
            
            // Enable betting
            enableBetting();
            
            // Clear any existing timer
            if (timerInterval) {
                clearInterval(timerInterval);
            }
            
            timerInterval = setInterval(() => {
                gameTimer--;
                document.getElementById('timer').textContent = gameTimer;
                
                // At 15 seconds, disable betting and show "Dealing..." 
                if (gameTimer === 15 && bettingPhase) {
                    bettingPhase = false;
                    disableBetting();
                    showDealingMessage();
                }
                
                // At 5 seconds, automatically deal cards and show result
                if (gameTimer === 5) {
                    autoDealCards();
                }
                
                // At 0 seconds, start new round immediately
                if (gameTimer <= 0) {
                    clearInterval(timerInterval);
                    // Wait 2 seconds before starting new game
                    setTimeout(() => {
                        newGame();
                    }, 2000);
                }
            }, 1000);
        }

        function enableBetting() {
            document.querySelectorAll('.bet-area').forEach(area => {
                area.style.pointerEvents = 'auto';
                area.style.opacity = '1';
                area.style.cursor = 'pointer';
            });
            document.getElementById('clearBetsBtn').disabled = false;
            updateGameStatus('Place your bets! ⏰');
        }

        function disableBetting() {
            document.querySelectorAll('.bet-area').forEach(area => {
                area.style.pointerEvents = 'none';
                area.style.opacity = '0.6';
            });
            document.getElementById('clearBetsBtn').disabled = true;
            updateGameStatus('Betting closed! 🚫');
        }

        function showDealingMessage() {
            updateGameStatus('Dealing cards... 🎴');
        }

        function autoDealCards() {
            // Only deal if there are bets placed
            if (Object.values(gameState.bets).some(bet => bet > 0)) {
                gameState.isGameActive = true;
                
                // Generate random cards
                const dragonCard = generateRandomCard();
                const tigerCard = generateRandomCard();

                // Display cards with animation
                setTimeout(() => displayCard('dragonCard', dragonCard), 200);
                setTimeout(() => displayCard('tigerCard', tigerCard), 400);
                
                // Determine winner and show results
                setTimeout(() => {
                    const result = determineWinner(dragonCard, tigerCard);
                    showQuickResult(result, dragonCard, tigerCard);
                }, 800);
            } else {
                updateGameStatus('No bets placed! 😴');
            }
        }

        function showQuickResult(winner, dragonCard, tigerCard) {
            gameState.totalGames++;
            
            // Calculate winnings
            let totalWin = 0;
            const multipliers = { dragon: 2, tiger: 2, tie: 9 };
            
            if (gameState.bets[winner] > 0) {
                totalWin = gameState.bets[winner] * multipliers[winner];
                gameState.balance += totalWin;
                gameState.totalWins++;
            }
            
            // Add to history
            gameState.gameHistory.unshift({
                winner,
                dragonCard: `${dragonCard.value}${dragonCard.suit}`,
                tigerCard: `${tigerCard.value}${tigerCard.suit}`,
                winAmount: totalWin,
                round: currentRound
            });
            
            if (gameState.gameHistory.length > 10) {
                gameState.gameHistory.pop();
            }
            
            // Show winner/loser effects
            updateWinnerDisplay(winner);
            
            // Show quick result
            const winnerNames = { dragon: 'Dragon', tiger: 'Tiger', tie: 'Tie' };
            const winnerIcons = { dragon: '🐲', tiger: '🐅', tie: '🤝' };
            
            let resultText = `${winnerIcons[winner]} ${winnerNames[winner]} Wins!`;
            if (totalWin > 0) {
                resultText += ` You won ₹${totalWin.toLocaleString()}! 🎉`;
            } else {
                resultText += ` Better luck next time! 😔`;
            }
            
            updateGameStatus(resultText);
            updateUI();
            
            // Reset bets for next round
            gameState.bets = { dragon: 0, tiger: 0, tie: 0 };
            updateBetDisplay();
        }

        function updateGameStatus(message) {
            // Add game status element if it doesn't exist
            let statusElement = document.getElementById('gameStatus');
            if (!statusElement) {
                statusElement = document.createElement('div');
                statusElement.id = 'gameStatus';
                statusElement.className = 'game-status text-center mb-3';
                statusElement.style.cssText = 'font-size: 1.2rem; font-weight: bold; color: #fff; background: rgba(0,0,0,0.8); padding: 10px; border-radius: 10px; margin: 10px 0; border: 2px solid #ffd700;';
                
                const timerInfo = document.querySelector('.roundtimer-info');
                if (timerInfo) {
                    timerInfo.insertAdjacentElement('afterend', statusElement);
                }
            }
            statusElement.textContent = message;
            
            // Auto hide status after 3 seconds during new round preparation
            if (message.includes('Place your bets')) {
                setTimeout(() => {
                    if (statusElement) {
                        statusElement.style.display = 'none';
                    }
                }, 3000);
            } else {
                statusElement.style.display = 'block';
            }
        }

        // Override the original dealCards function to prevent manual dealing during auto mode
        const originalDealCards = dealCards;
        dealCards = function() {
            if (bettingPhase) {
                alert('Wait for betting phase to end!');
                return;
            }
            originalDealCards();
        };

        // Start the first game when page loads
        document.addEventListener('DOMContentLoaded', function() {
            updateUI();
            addEventListeners();
            // Start first timer after a short delay
            setTimeout(() => {
                startTimer();
            }, 1000);
        }); 
        function displayCard(slotId, card) {
            const slot = document.getElementById(slotId);
            const isRed = card.suit === '♥️' || card.suit === '♦️';
            
            slot.innerHTML = `
                <div class="card">
                    <div class="card-value ${isRed ? 'red-suit' : 'black-suit'}">${card.value}</div>
                    <div class="card-suit ${isRed ? 'red-suit' : 'black-suit'}">${card.suit}</div>
                </div>
            `;
        }

        function determineWinner(dragonCard, tigerCard) {
            if (dragonCard.numericValue > tigerCard.numericValue) {
                return 'dragon';
            } else if (tigerCard.numericValue > dragonCard.numericValue) {
                return 'tiger';
            } else {
                return 'tie';
            }
        }

        function showResult(winner, dragonCard, tigerCard) {
            gameState.totalGames++;
            let winAmount = 0;
            let resultMessage = '';
            
            // Calculate winnings
            if (winner === 'dragon' && gameState.bets.dragon > 0) {
                winAmount = gameState.bets.dragon * 2;
                gameState.totalWins++;
                resultMessage = `🐲 Dragon Wins! You won ₹${winAmount.toLocaleString()}!`;
            } else if (winner === 'tiger' && gameState.bets.tiger > 0) {
                winAmount = gameState.bets.tiger * 2;
                gameState.totalWins++;
                resultMessage = `🐅 Tiger Wins! You won ₹${winAmount.toLocaleString()}!`;
            } else if (winner === 'tie' && gameState.bets.tie > 0) {
                winAmount = gameState.bets.tie * 9;
                gameState.totalWins++;
                resultMessage = `🤝 It's a Tie! You won ₹${winAmount.toLocaleString()}!`;
            } else {
                resultMessage = `You lost this round. ${winner === 'dragon' ? '🐲 Dragon' : winner === 'tiger' ? '🐅 Tiger' : '🤝 Tie'} wins!`;
            }

            gameState.balance += winAmount;

            // Update betting area visual feedback
            updateWinnerDisplay(winner);

            // Save to history
            gameState.gameHistory.push({
                dragonCard: `${dragonCard.value}${dragonCard.suit}`,
                tigerCard: `${tigerCard.value}${tigerCard.suit}`,
                winner,
                bet: {...gameState.bets},
                winAmount
            });

            // Show result modal
            document.getElementById('resultTitle').textContent = 'Game Result';
            document.getElementById('resultContent').innerHTML = `
                <div class="mb-3">
                    <h4>${resultMessage}</h4>
                </div>
                <div class="row">
                    <div class="col-6 text-center">
                        <h6>🐲 Dragon</h6>
                        <div class="h5">${dragonCard.value}${dragonCard.suit}</div>
                        <small>Value: ${dragonCard.numericValue}</small>
                    </div>
                    <div class="col-6 text-center">
                        <h6>🐅 Tiger</h6>
                        <div class="h5">${tigerCard.value}${tigerCard.suit}</div>
                        <small>Value: ${tigerCard.numericValue}</small>
                    </div>
                </div>
                <div class="mt-3">
                    <p>New Balance: ₹${gameState.balance.toLocaleString()}</p>
                </div>
            `;

            new bootstrap.Modal(document.getElementById('resultModal')).show();

            // Reset for next game
            setTimeout(() => {
                resetGame();
            }, 1000);
        }

        function updateWinnerDisplay(winner) {
            document.querySelectorAll('.bet-area').forEach(area => {
                const betType = area.getAttribute('data-bet');
                area.classList.remove('winner-glow', 'loser-fade'); // Remove previous effects
                
                if (betType === winner) {
                    area.classList.add('winner-glow');
                } else {
                    area.classList.add('loser-fade');
                }
            });
            
            // Remove effects after 3 seconds
            setTimeout(() => {
                document.querySelectorAll('.bet-area').forEach(area => {
                    area.classList.remove('winner-glow', 'loser-fade');
                });
            }, 3000);
        }

        function resetGame() {
            gameState.isGameActive = false;
            gameState.bets = { dragon: 0, tiger: 0, tie: 0 };
            
            // Reset UI
            document.getElementById('dragonCard').innerHTML = '<div class="placeholder-text">Dragon Card</div>';
            document.getElementById('tigerCard').innerHTML = '<div class="placeholder-text">Tiger Card</div>';
            
            document.querySelectorAll('.bet-area').forEach(area => {
                area.classList.remove('has-bet', 'active', 'winner-glow', 'loser-fade');
            });
            
            document.getElementById('dealBtn').disabled = false;
            document.getElementById('clearBetsBtn').disabled = false;
            
            updateUI();
        }

        function clearBets() {
            if (gameState.isGameActive) return;
            
            // Return bet amounts to balance
            Object.values(gameState.bets).forEach(bet => {
                gameState.balance += bet;
            });
            
            gameState.bets = { dragon: 0, tiger: 0, tie: 0 };
            updateUI();
            updateBetDisplay();
        }

        function newGame() {
            resetGame();
        }

        function updateUI() {
            document.getElementById('playerBalance').textContent = gameState.balance.toLocaleString();
            document.getElementById('totalWins').textContent = gameState.totalWins;
            document.getElementById('totalGames').textContent = gameState.totalGames;
            
            const winRate = gameState.totalGames > 0 ? Math.round((gameState.totalWins / gameState.totalGames) * 100) : 0;
            document.getElementById('winRate').textContent = winRate + '%';
            
            // Disable betting if no balance
            document.querySelectorAll('.bet-area').forEach(area => {
                area.style.pointerEvents = gameState.balance > 0 ? 'auto' : 'none';
                area.style.opacity = gameState.balance > 0 ? '1' : '0.5';
            });
        }
    </script>

    <script>
        const cards = [
            {value: 'A', name: 'ACE'},
            {value: '2', name: 'TWO'},
            {value: '3', name: 'THREE'},
            {value: '4', name: 'FOUR'},
            {value: '5', name: 'FIVE'},
            {value: '6', name: 'SIX'},
            {value: '7', name: 'SEVEN'},
            {value: '8', name: 'EIGHT'},
            {value: '9', name: 'NINE'},
            {value: '10', name: 'TEN'},
            {value: 'J', name: 'JACK'},
            {value: 'Q', name: 'QUEEN'},
            {value: 'K', name: 'KING'}
        ];

    //Dragon Cards
        const container = document.getElementById('cardsContainer-dragon');

        cards.forEach(card => {
            const cardElement = document.createElement('div');
            cardElement.className = 'card-container';
            cardElement.innerHTML = `
                <div class="card-value top-left">${card.value}</div>
                <div class="suits-display">
                    <div class="suit-row">
                        <span class="spades">♠</span>
                        <span class="hearts">♥</span>
                    </div>
                    <div class="suit-row">
                        <span class="diamonds">♦</span>
                        <span class="clubs">♣</span>
                    </div>
                </div>
                <div class="card-value bottom-right">${card.value}</div>
            `;
            
            cardElement.addEventListener('click', function() {
                this.style.transform = 'scale(1.1) rotateY(15deg)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 300);
            });
            
            container.appendChild(cardElement);
        });

    //Tiger cards
        const containertiger = document.getElementById('cardsContainer-tiger');

        cards.forEach(card => {
            const cardElement = document.createElement('div');
            cardElement.className = 'card-container';
            cardElement.innerHTML = `
                <div class="card-value top-left">${card.value}</div>
                <div class="suits-display">
                    <div class="suit-row">
                        <span class="spades">♠</span>
                        <span class="hearts">♥</span>
                    </div>
                    <div class="suit-row">
                        <span class="diamonds">♦</span>
                        <span class="clubs">♣</span>
                    </div>
                </div>
                <div class="card-value bottom-right">${card.value}</div>
            `;
            
            cardElement.addEventListener('click', function() {
                this.style.transform = 'scale(1.1) rotateY(15deg)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 300);
            });
            
            containertiger.appendChild(cardElement);
        });
    </script>