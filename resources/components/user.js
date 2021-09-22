import React from 'react';
import ReactDOM from 'react-dom'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';


function User() {
    return (
        <div className="container mt-5">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card text-center">
                        <div  className="card-header"><h2>ssss Component ind Laravel ddd</h2></div>

    Kill Yo <h1>Self</h1>
                        <FontAwesomeIcon icon="coffee" mask={['far', 'circle']} />

                        // Light:
                        <FontAwesomeIcon icon={["fal", "coffee"]} />
                        // Regular:
                        <FontAwesomeIcon icon={["far", "coffee"]} />
                        // Solid
                        <FontAwesomeIcon icon={["fas", "coffee"]} />
                        // ...or, omit as FontAwesome defaults to solid, so no need to prefix:
                        <FontAwesomeIcon icon="coffee" />
                        // Brand:
                        <FontAwesomeIcon icon={["fab", "github"]} />

                        <div className="card-body">i'm dddd S  in Laravel !
                            <i className="fas fa-user">ddd</i></div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default User;

// DOM element
if (document.getElementById('user')) {
    ReactDOM.render(<User />, document.getElementById('user'));
}
