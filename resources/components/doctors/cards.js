import React from "react";
import ReactDOM from 'react-dom'

function cards(){
    return(
        <>
            <h1>Cards Component</h1>
        </>
    )
}

export default cards;
if (document.getElementById('cards'))
ReactDOM.render(<cards/>,document.getElementById('cards'))
