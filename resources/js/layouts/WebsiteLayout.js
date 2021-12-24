import React from "react";
import Header from "../components/Header";
import Footer from "../components/Footer";

export default function WebsiteLayout(props) {
    return (
        <div className=" max-w-[1300px] font-sans container mx-auto px-4">

            <Header {...props} />

            <main>
                {props.children}

            </main>
            <div>
                <Footer {...props} />

            </div>
        </div>
    )
}