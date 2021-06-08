import React from 'react';
import ReactDOM from 'react-dom';

function Navbar() {
    return (
        <div >
         
            <div>Dette er er navagitions bar</div>

            <nav>
                Jeg indeholder pumkter
                <ul>
                    <li><a href="/">Forside</a></li>
                    <li><a href="/">Hej</a></li>
                    <li><a href="/">Med</a></li>
                    <li><a href="/">Dig</a></li>
                </ul>
            </nav>
           
        </div>
    );
}

export default Navbar;

if (document.getElementById('navbar')) {
    ReactDOM.render(<Navbar />, document.getElementById('navbar'));
}