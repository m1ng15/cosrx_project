const idInput = document.getElementById('id');
const pwInput = document.getElementById('pw');
const togglePwBtn = document.getElementById('togglePw');
const eyeIcon = togglePwBtn.querySelector('img');
const loginBtn = document.querySelector('.btn_login');
/* 비밀번호 입력 시, 눈 버튼 활성화 */
pwInput.addEventListener('input', () => {
    const hasText = pwInput.value.length > 0;
    togglePwBtn.disabled = !hasText;
})
/* 눈 버튼 토글 기능 활성화 */
togglePwBtn.addEventListener('click', () => {
    const isHidden = pwInput.type === 'password';

    pwInput.type = isHidden ? 'text' : 'password';
    eyeIcon.src = isHidden ? './images/eye_on.png' : './images/eye_off.png';
    eyeIcon.alt = isHidden ? '비밀번호 숨기기' : '비밀번호 보기';
})
/* 아이디/비밀번호 지우기 버튼 활성화 */
document.querySelectorAll('.x_btn').forEach(btn => {
    const targetId = btn.dataset.target;
    const inputEl = document.getElementById(targetId);

    btn.addEventListener('click', () => {
        inputEl.value = '';
        inputEl.focus();
        eyeIcon.src = './images/eye_off.png';
        pwInput.type = 'password';
        inputEl.dispatchEvent(new Event('input'));
    })
})
/* input[required] 말풍선 삭제 */
document.querySelectorAll('input[required]').forEach(input => {
    input.addEventListener('invalid', (e) => {
        e.preventDefault();
    })
})
/*
1. 로그인 버튼 누르면 -> 아이디/비밀번호 입력값 확인
2. 아이디 혹은 비밀번호의 값이 없으면 경고창 띄우기
3. 폼 제출 막기
 */
loginBtn.addEventListener('click', (e) => {
    const idError = idInput.closest('.id_group').querySelector('p');
    const pwError = pwInput.closest('.pw_group').querySelector('p');

    let hasError = false;

    if (idInput.value.trim() === '') {
        idError.style.display = 'block';
        hasError = true;
    } else {
        idError.style.display = 'none';
    }

    if (pwInput.value.trim() === ''){
        pwError.style.display = 'block';
        hasError = true;
    } else {
        pwError.style.display = 'none';
    }

    if (hasError) {
        e.preventDefault();
    }
})