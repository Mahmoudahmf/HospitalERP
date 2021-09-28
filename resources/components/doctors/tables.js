import React from 'react';
import ReactDOM from 'react-dom';

function tables(){
    return(
        <>
            <h1>tables</h1>
        </>
    )
}

export default tables;

if (document.getElementById('tables'))
    ReactDOM.render(<doctor_dashboard/>,document.getElementById('tables'));
