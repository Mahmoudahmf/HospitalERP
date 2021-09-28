import React from 'react';
import ReactDOM from 'react-dom';

function doctor_dashboard(){
    return(
        <>
            <h1>Doctor Dashboard</h1>
        </>
    )
}

export default doctor_dashboard;

if (document.getElementById('doctor_dashboard'))
    ReactDOM.render(<doctor_dashboard/>,document.getElementById('doctor_dashboard'));
