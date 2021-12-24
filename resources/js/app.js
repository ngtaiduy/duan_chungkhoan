import {React, useState} from 'react'
import { BrowserRouter, Switch, Route } from "react-router-dom"
import Home from './views/Home'
import Info from './views/Info'
import WebsiteLayout from './layouts/WebsiteLayout'
import ViewPage from './views/ViewPage';

// axios.defaults.baseURL = "http://localhost:8000/";

export default function App(props) {
    // const [products, setProducts] = useState([]);
    return (
        <div className="AppComponent post" id="Application">
            <BrowserRouter>
                <Switch>
                    <Route path="/*">
                        <WebsiteLayout {...props}>
                        <Switch>
                            {/* <Route exact path="/" component={ HomePage } /> */}
                            <Route path="/" component={Home} />
                            {/* <Route path="/info" component={Info} /> */}
                            <Route path="/views" component={ViewPage} />
                        </Switch>
                        </WebsiteLayout>
                    </Route>
                </Switch>
            </BrowserRouter>
        </div>
    )
}
