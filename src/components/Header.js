
import React from 'react';
import './Header.css';

export default ({black}) => {
    return (
        <header className={black ? 'black' : ''}>
            <div className="header--logo">
                <a href="/">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/Logonetflix.png" alt="Netflix" />
                </a>
            </div>
            <div className="header--user" id="menu">
                <a href="http://localhost/netflixclone/public/menu.php"> 
                   <button className='buttonuser'> <img className='imgclass' src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Netflix-avatar.png" alt="Usuário" />
                
                   </button>
                </a>
                
            </div>
        </header>
    )
}

function menuShow() {
    let menuMobile = document.querySelector('.mobile-menu');
    if (menuMobile.classList.contains('open')) {
    menuMobile.classList.remove('open');
    document.querySelector('icon').scr="https://upload.wikimedia.org/wikipedia/commons/0/0b/Netflix-avatar.png"
    } else {
    menuMobile.classList.add('open)')

    }
}