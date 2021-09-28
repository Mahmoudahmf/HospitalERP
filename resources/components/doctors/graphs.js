import React from "react";
import ReactDOM from "react-dom"

function graphs(){
    return(
        <>
            <h1>Graphs component</h1>
        </>
    )
}

export default graphs;

document.getElementById('graphs')
ReactDOM.render(<graphs/>, document.getElementById('graphs'))
