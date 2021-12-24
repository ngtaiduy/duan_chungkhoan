import React from "react";
import Logo from '../asset/image/logo_thebank.png'
export default function Header(props) {
    return (
        <header class="text-gray-600 body-font bg-[#0368FF] z-[999] fixed top-0 left-0 right-0 row-span-2 col-span-2 ">
            <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    {/* Logo */}
                    <span class="ml-3 text-xl">
                        <img src={Logo} width={100} height={20} />
                    </span>
                </a>
                <ul class="md:mr-auto md:ml-4 md:py-1 md:pl-4 flex flex-wrap items-center text-base justify-center text-[16px]">
                    <li class="ml-5 hover:text-[#f4f7fc] text-white">
                        <a href="">Kiến thức</a>
                    </li>
                    <li class="ml-5 hover:text-[#0f0f0f] text-white">
                        <a href="">Về chúng tôi</a></li>
                    <li class="ml-5 hover:text-[#f4f7fc] text-white">
                        <a href="">Liên hệ</a>
                    </li>
                    <li class="ml-5 hover:text-[#f4f7fc] text-[#3f705d] bg-[#ffd235] rounded-md">
                        <a href="" class="">
                            <p class="py-[3px] px-[10px]">Liên hệ</p>
                        </a>
                    </li>
                </ul>
                <ul class="flex">
                    <li class="ml-[15px] mr-[10px] mt-[2px]">
                        <a href="" class="inline-flex items-center  border-0 py-1 px-3 focus:outline-none text-white hover:text-[#3f705d] rounded text-base mt-4 md:mt-0 font-normal p-[1em] ">Đăng nhập
                          
                        </a>
                    </li>
                    <li class="ml-[20px] mt-[2px] ">
                        <a href="" class="inline-flex items-center border-[1px] py-1 px-3 focus:outline-none text-white hover:text-[#3f705d] rounded-full text-[1rem] font-normal mt-4 md:mt-0 p-4" >
                            Đăng kí
                        </a>
                    </li>
                  

                </ul>

            </div>
        </header>
    )
}