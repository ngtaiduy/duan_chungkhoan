import {React, useState} from 'react'
import { BrowserRouter, Switch, Route } from "react-router-dom"
import Home from './views/Home'
import WebsiteLayout from './layouts/WebsiteLayout'



export default function App(props) {
    const [products, setProducts] = useState([]);
    return (
        <div className="AppComponent post" id="Application">
            <BrowserRouter>
                <Switch>
                    <Route path="/*">
                        <WebsiteLayout {...props}>
                        <Switch>
                            {/* <Route exact path="/" component={ HomePage } /> */}
                            <Route path="/" component={Home} />
                            {/* <Route path="/about" component={AboutPage} /> */}
                        </Switch>
                        </WebsiteLayout>
                    </Route>
                </Switch>
            </BrowserRouter>
        </div>
    )
}
