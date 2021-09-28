import Router from 'react'
import ReactDOM from 'react-dom'

function side_menu(){
    return(
        <>
            <h1>Side menu component</h1>
        </>
    )
}

export default side_menu;

if(document.getElementById('side_menu'))
    ReactDOM.render(<side_menu/>, document.getElementById('side_menu'))
