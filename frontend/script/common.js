/* 맨 위 공지사항 닫기 활성화 */
const headerNotice = document.querySelector('.hd_top')
const noticeClose = document.querySelector('.hd_top #close_btn')
noticeClose.addEventListener('click',()=>{
    headerNotice.style.display = 'none';
})
/* ===================================== header 애니메이션 */
const navBar = document.querySelector('header .hd_navbar')
const scrollThreshold = parseInt(document.body.dataset.scrollThreshold) || -100;
navBar.classList.add('active')
/* scroll에 따른 header 배경색 변환 */
window.addEventListener('scroll',()=>{
    subMenu.style.display = 'none';
    if (window.scrollY < scrollThreshold) {
        navBar.classList.remove('active')
    } else {navBar.classList.add('active')}
})
/* header에 hover 시 배경색 변환 */
navBar.addEventListener('mouseenter',()=>{
    if (window.scrollY < scrollThreshold) {
        navBar.classList.add('active');
    }
});
navBar.addEventListener('mouseleave',()=>{
    if (window.scrollY < scrollThreshold) {
        navBar.classList.remove('active');
    }
});

/* nav에 hover시, 활성화선 표시 */
const navMenu = document.querySelectorAll('header nav .path li');
const subMenuActive = document.querySelector('header nav .sub_active');
const subMenu = document.querySelector('nav .sub_bg');
let hideTimeout;
navMenu.forEach((menu)=>{
    menu.addEventListener('mouseenter',()=>{
        menu.classList.add('active');
        if (menu.classList.contains('sub_active')){
            subMenu.style.display = 'block';
        } else {
            subMenu.style.display = "none";
        }
    })
    menu.addEventListener('mouseleave',()=>{
        menu.classList.remove('active')
    })
})
/* nav - skincare hover시, 서브 메뉴 활성화 */
subMenuActive.addEventListener('mouseenter',()=>{
    clearTimeout(hideTimeout);
    subMenu.style.display = 'block';
})
subMenu.addEventListener('mouseenter',()=>{
    clearTimeout(hideTimeout);
    subMenu.style.display = 'block';
})
subMenu.addEventListener('mouseleave',()=>{
    hideTimeout = setTimeout(() => {
        subMenu.style.display = 'none';
    }, 200);
})