import React from 'react';
import ReactDOM from 'react-dom';

function Hallo() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Hallo my friend</div>

                        <div className="card-body">løb alt hvad du kan</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Hallo;

if (document.getElementById('hallo')) {
    ReactDOM.render(<Hallo />, document.getElementById('hallo'));
}