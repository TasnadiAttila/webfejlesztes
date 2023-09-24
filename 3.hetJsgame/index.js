let playerWins = 0; // Counter for player wins
let playerLosses = 0; // Counter for player losses
let tieCount = 0; // Counter for ties

function makeChoice(playerChoice) {
    const choices = ['rock', 'paper', 'scissors'];
    const randomIndex = Math.floor(Math.random() * choices.length);
    const computerChoice = choices[randomIndex];

    const result = determineWinner(playerChoice, computerChoice);

    const resultMessage = getResultMessage(result, playerChoice, computerChoice);

    document.getElementById('result').innerText = resultMessage;

    if (result === 'player') {
        playerWins++;
        document.getElementById('playerWins').innerText = playerWins;
    } else if (result === 'computer') {
        playerLosses++;
        document.getElementById('playerLosses').innerText = playerLosses;
    } else {
        tieCount++;
        document.getElementById('tieCount').innerText = tieCount;
    }
}

function determineWinner(playerChoice, computerChoice) {
    if (playerChoice === computerChoice) {
        return 'tie';
    } else if (
        (playerChoice === 'rock' && computerChoice === 'scissors') ||
        (playerChoice === 'paper' && computerChoice === 'rock') ||
        (playerChoice === 'scissors' && computerChoice === 'paper')
    ) {
        return 'player';
    } else {
        return 'computer';
    }
}

function getResultMessage(result, playerChoice, computerChoice) {
    switch (result) {
        case 'player':
            return `You win! ${playerChoice} beats ${computerChoice}.`;
        case 'computer':
            return `Computer wins! ${computerChoice} beats ${playerChoice}.`;
        default:
            return `It's a tie! Both chose ${playerChoice}.`;
    }
}
