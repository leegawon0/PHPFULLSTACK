const titleInput = document.getElementById('title');
const contentInput = document.getElementById('content');
const memoList = document.getElementById('memo-list');
const saveBtn = document.getElementById('save-btn');
const resetBtn = document.getElementById('reset-btn');

saveBtn.addEventListener('click', () => {
	// Create new memo element
	const memo = document.createElement('li');
	memo.classList.add('memo');
	// Set memo title
	const memoTitle = document.createElement('h3');
	memoTitle.textContent = titleInput.value;
	memo.appendChild(memoTitle);
	// Set memo content
	const memoContent = document.createElement('p');
	memoContent.textContent = contentInput.value;
	memo.appendChild(memoContent);
	// Add memo to memo list
	memoList.appendChild(memo);
	// Reset form inputs
	titleInput.value = '';
	contentInput.value = '';
});

resetBtn.addEventListener('click', () => {
	// Remove all memo elements from memo list
	while (memoList.firstChild) {
		memoList.removeChild(memoList.firstChild);
	}
});
