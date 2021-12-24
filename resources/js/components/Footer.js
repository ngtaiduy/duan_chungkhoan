import React from "react";
import Logo from '../asset/image/logo_thebank.png'
import Facebook from '../asset/image/facebook.png';
import Email from '../asset/image/email.png';
import Phone from '../asset/image/telephone.png';
import Apple from '../asset/svg/Apple.svg';
import Chplay from '../asset/svg/ch-play.svg';

export default function Footer(props) {
    return (
        <footer class="text-gray-600 body-font">
            <div class="container px-5 pt-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
                <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                        <span class="ml-3 text-xl">
                            <img src={Logo} width={200} height={30} />
                        </span>
                    </a>
                    <p class="mt-2 px-2 text-sm text-gray-500">© 2018 FINCORP JSC. All rights reserved.</p>
                    <p class="mt-2 px-2 text-sm text-gray-500">
                        <img src={Facebook} width={30} />
                    </p>
                </div>
                <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                    <div class="lg:w-2/6 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Kiến thức</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-gray-900 hover:text-gray-800">Về chúng tôi</a>
                            </li>
                            <li>
                                <a class="text-gray-900 hover:text-gray-800">Liên hệ</a>
                            </li>

                        </nav>
                    </div>
                    <div class="lg:w-2/6 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Fmarket Platform</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Điều khoản sử dụng</a>
                            </li>
                        
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Quyền riêng tư</a>
                            </li>

                        </nav>
                    </div>
                    <div class="lg:w-2/6 md:w-1/2 w-full px-4">
                        <div class="flex">
                            <img src={Email} width={25} />
                            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3 px-2">contact@thebank.vn</h2>
                        </div>

                        <nav class="list-none mb-10">
                            <li class="flex">
                                <img src={Phone} width={25} />
                                <a class="text-gray-600 hover:text-gray-800 px-2">1900 636 232</a>
                            </li>

                        </nav>
                    </div>
                </div>

            </div>
            <div class="float-right flex">
                <img src={Apple} class="pb-[20px]" />
                <img src={Chplay} class="pb-[20px] px-[10px]" />
            </div>
            <div>
                <div class="container mx-auto pt-20 pb-10 px-5 sm:flex-row">
                    <a href="https://thebank.vn" class="text-gray-500 text-xl font-bold text-center sm:text-left p-2">Công ty Cổ phần Công nghệ và Truyền thông Samo
                    </a>
                    <br />
                    <span class=" sm:ml-auto sm:mt-0 p-2 sm:justify-start mx-2">
                        <p class="px-2">Đối tác tổ chức - Truyền thông - Quảng cáo liên hệ: Mr. Long - long.nguyen@thebank.vn</p>
                        <p class="px-2">Sở Kế Hoạch & Ðầu Tư TP Hà Nội Cấp giấy phép số 0106138449</p>
                        <p class="px-2">Giấy phép hoạt động: Số 259/ GP - BTTTT do bộ thông tin và truyền thông cấp ngày 20/05/2016</p>

                    </span>
                </div>
            </div>
        </footer>
    )
}