import React from "react";
import Header from "../components/Header";
import Footer from "../components/Footer";

export default function WebsiteLayout(props) {
    return (
        <div>
            <div>
            <Header {...props} />

            </div>
            <main>
                <div>

                {props.children}

                </div>
            </main>
            <div>
            <Footer {...props} />

            </div>
        </div>
    )
}