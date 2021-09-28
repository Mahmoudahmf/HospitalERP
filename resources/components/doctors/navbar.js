import React from 'react';
import ReactDOM from 'react-dom';

function navbar(){
    return(
        <>
            <h1>navbar component</h1>
        </>
    )
}
export default navbar;

document.getElementById('navbar')
ReactDOM.render(<navbar />,document.getElementById('navbar'))
