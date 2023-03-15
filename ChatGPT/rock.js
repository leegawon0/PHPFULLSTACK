const choices = document.querySelectorAll('.choices button');
const result = document.querySelector('.result p');

let playerChoice;
let computerChoice;
let winner;

function playGame() {
	choices.forEach(choice => choice.addEventListener('click', function() {
		playerChoice = this.id;
		computerChoice = Math.random();
		if (computerChoice < 0.34) {
			computerChoice = 'rock';
		} else if (computerChoice <= 0.67) {
			computerChoice = 'paper';
		} else {
			computerChoice = 'scissors';
		}
		winner = compareChoices(playerChoice, computerChoice);
		result.textContent = `You chose ${playerChoice}, computer chose ${computerChoice}. ${winner}`;
	}));
}

function compareChoices(player, computer) {
	if (player === computer) {
		return 'It\'s a tie!';
	}
	if (player === 'rock') {
		if (computer === 'scissors') {
			return 'You win!';
		} else {
			return 'Computer wins!';
		}
	}
	if (player === 'paper') {
		if (computer === 'rock') {
			return 'You win!';
		} else {
			return 'Computer wins!';
		}
	}
	if (player === 'scissors') {
		if (computer === 'paper') {
			return 'You win!';
		} else {
			return 'Computer wins!';
		}
	}
}

playGame();
