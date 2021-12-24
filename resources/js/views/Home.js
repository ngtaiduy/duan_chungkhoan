import React from "react";
import ImgApp from '../asset/image/Thebank_app.png';
import Step1 from '../asset/svg/icon-step1.svg';
import Step2 from '../asset/svg/icon-step2.svg';
import Step3 from '../asset/svg/icon-step3.svg';
import IconRight from '../asset/image/img-right.png';
import Facebook from '../asset/image/facebook.png';

export default function Home() {
    return (
        <div>
            {/* banner */}
            <div class="container mx-auto item-center">
                <section class="text-gray-600 body-font ">
                    <div class="px-5 flex items-center ml-[47px]">
                        <div class="col-span-12 z-40">
                            <div class="lg:w-4/5 md:w-1/2 md:pr-16 lg:pr-0">
                                <h2 class="title-font font-sans font-bold text-[46px] text-gray-900 ">Đầu tư thông minh, hiệu quả dành cho
                                    <a class="underline decoration-[#ffd235] text-[#0368ff] mx-4">Nhà đầu tư</a>.
                                </h2>
                                <p class="leading-relaxed mt-4 mr-[20px]">Nền tảng duy nhất tập trung các quỹ m ở hàng đầu Việt Nam, người mua trực tiếp sở hữu chứng chỉ quỹ được phát hành bởi các quỹ đầu tư uy tín.</p>
                            </div>
                        </div>
                        <div class="lg:w-3/6 md:w-1/2 rounded-lg flex flex-col md:ml-auto mt-10 md:mt-[50px] col-span-8 relative z-30">
                            <div class="md">
                                <img src={ImgApp} class='w-[730px] h-[560px]' />

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            {/* table */}
            <div>
                <section class="text-gray-600 body-font w-full block bg-[#0368ff] rounded-lg">
                    <div class="py-24">
                        <div class="flex flex-col text-center w-full mb-12 ">
                            <p class="sm:text-3xl mb-4 text-white not-italic text-[70px]">Hiệu suất đầu tư quỹ mở</p>
                            <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-white ">Nhiều sản phẩm đầu tư lợi tức cao được phát hành bởi các Tổ chức uy tín hàng đầu Việt Nam, giúp mọi người tiết kiệm & đầu tư hiệu quả hơn.</p>
                        </div>
                        <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                        </div>
                        {/* table */}
                        <div class="flex flex-col  container mx-auto drop-shadow-lg">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 ">
                                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8 ">
                                    <div class="overflow-hidden  p-2">
                                        <table class="min-w-full rounded-[15px] bg-white">
                                            <thead class="border-b">
                                                <tr>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                        Tên CCQ
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                        Tổ chức phát hành
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                        Loại quỹ
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                        Giá gần nhất (VND)
                                                    </th>
                                                    <th>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-center">
                                                                    <th scope="col-1" class="text-sm font-medium text-gray-900 py-4">
                                                                    </th>
                                                                    <th scope="col-1" class="text-sm font-medium text-gray-900 py-4">
                                                                        Giá gần nhất (VND)
                                                                    </th>
                                                                    <th scope="col-1" class="text-sm font-medium text-gray-900 py-4">
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                                        Giá gần nhất (VND)
                                                                    </th>
                                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                                        Giá gần nhất (VND)
                                                                    </th>
                                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                                        Giá gần nhất (VND)
                                                                    </th>
                                                                </tr>
                                                            </thead>

                                                        </table>
                                                    </th>
                                                </tr>


                                            </thead>
                                            <tbody>
                                                <tr class="border-b">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Mark
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        <a href="">
                                                            Otoo
                                                        </a>
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        @mdo
                                                    </td>

                                                    <tr>
                                                        <td>
                                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                @mdo
                                                            </td>
                                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                @mdo
                                                            </td>
                                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                @mdo
                                                            </td>
                                                        </td>

                                                    </tr>


                                                </tr>
                                                <tr class="border-b">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Mark
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        <a href="">
                                                            Otoo
                                                        </a>
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        @mdo
                                                    </td>

                                                    <tr>
                                                        <td>
                                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                @mdo
                                                            </td>
                                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                @mdo
                                                            </td>
                                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                @mdo
                                                            </td>
                                                        </td>
                                                    </tr>
                                                </tr>
                                                <tr class="border-b">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Mark
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        <a href="">
                                                            Otoo
                                                        </a>
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        @mdo
                                                    </td>

                                                    <tr>
                                                        <td>
                                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                @mdo
                                                            </td>
                                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                @mdo
                                                            </td>
                                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                @mdo
                                                            </td>
                                                        </td>

                                                    </tr>


                                                </tr>
                                                <tr class="">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Mark
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        <a href="">
                                                            Otoo
                                                        </a>
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        @mdo
                                                    </td>

                                                    <tr>
                                                        <td>
                                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                @mdo
                                                            </td>
                                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                @mdo
                                                            </td>
                                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                @mdo
                                                            </td>
                                                        </td>

                                                    </tr>


                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            {/*step */}
            <div>

                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="text-center py-4">
                            <h2 class="text-[3rem] font-bold">Bắt đầu ngay chỉ với 3 bước</h2>
                        </div>
                        <div class="flex flex-wrap -m-4">
                            {/* step */}
                            <div class="p-4 md:w-1/3 flex ">
                                <div class="h-full overflow-hidden text-center">
                                    <img class="lg:h-24 lg:w-24 md:h-36 w-full object-cover object-center m-auto" src={Step1} alt="blog" />
                                    <div class="p-6">
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                    </div>
                                </div>
                                <div class="">
                                    <img src={IconRight} class="pt-10 px-4" width={250} height={50} />
                                </div>
                            </div>
                            <div class="p-4 md:w-1/3 flex ">
                                <div class="h-full overflow-hidden text-center">
                                    <img class="lg:h-24 lg:w-24 md:h-36 w-full object-cover object-center m-auto" src={Step1} alt="blog" />
                                    <div class="p-6">
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                    </div>
                                </div>
                                <div class="">
                                    <img src={IconRight} class="pt-8 px-4" width={250} height={50} />
                                </div>
                            </div>
                            <div class="p-4 md:w-1/3 flex ">
                                <div class="h-full overflow-hidden text-center">
                                    <img class="lg:h-24 lg:w-24 md:h-36 w-full object-cover object-center m-auto" src={Step1} alt="blog" />
                                    <div class="p-6">
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                    </div>
                                </div>
                            </div>
                          

                        </div>
                    </div>
                </section>
            </div>
            {/* Cộng đồng */}
            <div>
                <section class="text-gray-600 body-font w-full block bg-[#0368ff] rounded-[15px]">
                    <div class="py-12">
                        <div class="flex flex-col text-center w-full mb-12 ">
                            <h1 class="sm:text-3xl text-[120px] font-medium title-font mb-4 text-white">Cộng đồng Thebank</h1>
                            <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-white">Nơi trao đổi, thảo luận về các sản phẩm đầu tư <br />tài chính chuyên nghiệp</p>
                        </div>
                        <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-[#ffd235] border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded-[30px] text-lg">
                                    <img src={Facebook} class="px-2" width={50} />
                                    <a href="https://thebank.vn">Tham gia ngay</a>
                                </button>
                        </div>
                      
                    </div>
                </section>

            </div>
        </div>

    )
}