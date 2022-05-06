<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coinmarketcap</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./library/owl-slider/owl.carousel.min.css">
    <link rel="stylesheet" href="./library/owl-slider/owl.theme.default.min.css">
</head>
<style>
body {
    background: rgb(255, 255, 255);
    color: rgb(0, 0, 0);
    text-size-adjust: 100%;
    font-family: Inter, -apple-system, BlinkMacSystemFont, "segoe ui", Roboto, Helvetica, Arial, sans-serif;
    font-size: 15px;
    line-height: 1.5em;
    vertical-align: baseline;
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    -webkit-font-smoothing: antialiased;
}

/* Start làm tốc độ không bằng web coinmarketcap */
.menu-dropdown-currencys:hover .submenu-currencys {
    animation: 0.3s ease 0s 1 normal forwards running lbWRkT;
}

/* End làm tốc độ không bằng web coinmarketcap */
.owl-item {
    z-index: 1;
    width: 280px !important;
    height: 194px !important;
}

.menu-dropdown-currencys-link:hover .submenu-currencys {
    display: block;
    z-index: 9999;
}

.menu-dropdown-exchanges-link:hover .submenu-exchanges {
    display: block;
    z-index: 9999;
}

.menu-dropdown-NFTs-link:hover .submenu-NFTs {
    display: block;
    z-index: 9999;
}

.menu-dropdown-Products-link:hover .submenu-Products {
    display: block;
    z-index: 9999;
}

.menu-dropdown-Learn-link:hover .submenu-Learn {
    display: block;
    z-index: 9999;
}

.category-button {
    -webkit-box-align: center;
    align-items: center;
    background: transparent;
    border: 0px;
    border-radius: 8px;
    display: inline-flex;
    color: rgb(0, 0, 0);
    cursor: pointer;
    -webkit-box-pack: center;
    justify-content: center;
    outline: 0px;
    font-weight: 600;
    width: auto;
    height: 32px;
    font-size: 12px;
    padding: 0px 16px;
    line-height: 18px;
}

.category-button-not-clicked {
    padding: 0px 14px;
    white-space: nowrap !important;
    color: rgb(88, 102, 126) !important;
    margin-right: 4px !important;
}

.category-button-clicked {
    padding: 0px 14px;
    white-space: nowrap !important;
    margin-right: 4px !important;
    background-color: rgb(240, 246, 255) !important;
    color: rgb(56, 97, 251) !important;
}

.coin-data-table th {
    position: sticky;
    top: 0px;
    border-top: 1px solid #eff2f5;
    padding: 11px 10px;
    text-align: right;
    z-index: 99;
    font-size: 12px;

}

.coin-data-table th,
.coin-data-table td {
    border-bottom: 1px solid #eff2f5;
    padding: 10px;
    background-color: #fff;
}

.coin-data-table thead th {
    background-color: #fff;
    height: 47px;
}

.coin-data-table tbody th {
    background-color: #fff;
    height: 80.5px;
}

.pagination .previous {
    margin-right: 8px;
    display: inline-block;
    min-width: 28px;
    height: 28px;
    color: rgb(23, 25, 36);
    line-height: 28px;
    text-align: center;
    vertical-align: middle;
    list-style: none;
    border-radius: 2px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
}

.pagination .page {
    display: inline-flex;
    min-width: 32px;
    height: 32px;
    margin-right: 4px;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    border-radius: 8px;
    outline: 0px;
    cursor: pointer;
    user-select: none;
    font-weight: 600;
    color: rgb(23, 25, 36);
    min-width: 32px;
    height: 32px;
    margin-right: 4px;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    border-radius: 8px;
    outline: 0px;
    cursor: pointer;
    user-select: none;
    font-weight: 600;
    color: rgb(23, 25, 36);
}

.pagination .page:hover {
    background: rgb(239, 242, 245);
}

.pagination .page a {
    height: 100%;
    width: 100%;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    padding: 0px 6px;
    transition: none 0s ease 0s;
    color: rgb(23, 25, 36) !important;
}

.pagination .active {
    background: rgb(56, 97, 251);
}

.pagination .active a {
    color: rgb(255, 255, 255) !important;
}

.pagination .break {
    outline: 0px;
    margin-right: 8px;
    display: inline-block;
    min-width: 28px;
    height: 28px;
    color: rgb(23, 25, 36);
    line-height: 28px;
    text-align: center;
    vertical-align: middle;
    list-style: none;
    border-radius: 2px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
}

.pagination .break a {
    background: transparent;
    border: none;
    cursor: pointer;
    color: rgb(102, 102, 102);
    display: none;
    text-decoration: none;
}

.pagination .break::after {
    display: block;
    content: "•••";
    color: rgb(102, 102, 102);
    font-size: 10px;
    margin: 0px auto;
}

.pagination .next {
    display: inline-block;
    min-width: 28px;
    height: 28px;
    color: rgb(23, 25, 36);
    line-height: 28px;
    text-align: center;
    vertical-align: middle;
    list-style: none;
    border-radius: 2px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
}



.text-content .seo-text-translations h2 {
    font-weight: 500;
    font-size: 14px;
    line-height: 21px;
    margin-bottom: 10px;
}

.text-content .seo-text-translations p {
    font-size: 12px;
    line-height: 18px;
    color: rgb(88, 102, 126);
    padding-bottom: 15px;
}
</style>

<body>
    <div id="home">
        <header>
            <div id="information-currency-market"
                class="h-[36px] text-[12px] font-[500] py-[4px] leading-[16px] relative z-10 " class=""
                style="border-bottom: 1px solid rgb(239, 242, 245);">
                <div class="flex items-center mx-[65px] h-[27px] px-[16px]">
                    <div class="w-[875px] justify-center text-[12px] font-[500] space-x-[16px]">
                        <span class="">Cryptos: <a href="#">18,888</a></span><span>Exchanges:<a href="#">508</a>
                        </span><span>Market
                            Cap: <a href="#">$1,900,593,084,047</a></span><span>24h Vol: <a
                                href="#">$83,942,787,836</a></span><span>Dominance:<a href="#">BTC: 41.0% ETH:
                                19.5%</a></span><span><span
                                class="fa-solid fa-gas-pump mr-[4px] align-middle"></span>ETH
                            Gas: <a href="#">42
                                Gwei <span
                                    class="fa-solid fa-angle-down text-[11px] ml-[4px] align-middle"></span></a></span>
                    </div>
                    <div class="flex ml-auto content-center items-center">
                        <div class="flex items-center">
                            <div class="h-[27px] mr-[6px]">
                                <button
                                    class="bg-transparent rounded-[5px] border-none cursor-pointer inline-flex text-[12px] font-medium h-full leading-[12px] m-0 p-[5px] align-baseline	whitespace-nowrap"
                                    style="align-items: center;color: rgb(23, 25, 36);"><span
                                        class="cursor-pointer font-[700]" style="color: rgb(23, 25, 36);">English</span>
                                    <span class="mt-[2px0 ml-[4px] cursor-pointer fa-solid fa-caret-down"
                                        style="color: rgb(23, 25, 36);"></span></button>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class=""><button
                                    class="bg-transparent outline-0 items-center border-none cursor-pointer inline-flex text-[12px] font-medium height-full leading-[12px] m-0 p-[5px] align-baseline whitespace-nowrap"
                                    style="color: rgb(23, 25, 36);"><span
                                        class="block h-[15px] w-[15px] bg-center bg-cover bg-no-repeat border rounded"
                                        style="background-image: url(./images/USD.svg); border-color: rgb(228, 231, 235);border-radius: 50%;"></span>
                                    <span class="font-[700] ml-[6px]">USD</span>
                                    <span class=" mt-[2px] ml-[8px]"><span class="fa-solid fa-caret-down"
                                            style="color: rgb(23, 25, 36);"></span></span></button>

                            </div>
                        </div>
                        <button
                            class="items-center bg-transparent border-none cursor-pointer inline-flex text-[12px] font-[500] leading-[12px] m-0 p-[5px] align-baseline whitespace-nowrap h-[27px] w-[22px]"
                            style="border-radius: 5px; color: rgb(23, 25, 36);"><i
                                class="fa-solid fa-moon"></i></button>
                    </div>
                </div>

            </div>
            <nav id="menu"
                class="flex flex-row items-center py-[5px] px-[15px] max-w-[1400px] w-[100%] my-0 mx-auto h-[71px]"><a
                    class="cmc-logo-link cmc-link" href="#" class="no-underline cursor-pointer"
                    style="color: rgb(56, 97, 251);">
                    <div class="relative  w-[168px] h-[28px] bg-center bg-no-repeat bg-contain"
                        style="background-image: url(./images/coinmarketcap_1.svg);"></div>
                </a>
                <div class="flex grow shrink basic-0 pl-[20px]">
                    <div class="flex grow shrink basic-0 justify-start">
                        <div
                            class="menu-dropdown-currencys-link text-[14px] font-[600] leading-[21px] cursor-pointer inline-block relative">
                            <a class="hover:text-[#1070E0] py-0 pr-[8px] pl-0 items-center flex text-black"
                                style="min-height: 61px">
                                <span
                                    class="relative inline text-inherit text-[14px] font-[600] leading-[21px]">Cryptocurrencies</span>
                            </a>
                            <div class="submenu-currencys hover:block hover:opacity-1 p-[16px] bg-white absolute z-9999 mt-0 hidden whitespace-nowrap left-[50%] translate-x-[-50%] items-center"
                                style="border-radius: 8px;filter: drop-shadow(rgba(128, 138, 157, 0.12) 0px 1px 2px) drop-shadow(rgba(128, 138, 157, 0.24) 0px 8px 32px);color: unset; min-height: 61px;">
                                <a target="_self" href="/"
                                    class="grid submenu-item cmc-link items-center p-[8px] text-black"
                                    style=" grid-template-columns: max-content auto auto auto; "><img
                                        class="mr-[16px] w-[32px] h-[32px]" size="32" src="./images/MenuCmcIcon.svg"
                                        alt="no image">Ranking
                                </a>
                                <a target="_self" href="/news/"
                                    class="grid submenu-item cmc-link items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto; "><img
                                        class="mr-[16px] w-[32px] h-[32px]" size="32"
                                        src="./images/MenuRecentlyAddedIcon.svg" alt="no image">Recently Added
                                </a>
                                <a target="_self" href="/cryptocurrency-category/"
                                    class="grid submenu-item cmc-link items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto; "><img
                                        class="mr-[16px] w-[32px] h-[32px]" size="32"
                                        src="./images/MenuCategoriesIcon.svg" alt="no image">Categories
                                </a>
                                <a target="_self" href="/best-cryptos/"
                                    class="grid submenu-item cmc-link items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto; "><img
                                        class="mr-[16px] w-[32px] h-[32px]" size="32"
                                        src="./images/MenuSpotlightIcon.svg" alt="no image">Spotlight
                                </a>
                                <a target="_self" href="/gainers-losers/"
                                    class="grid submenu-item cmc-link items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto; "><img
                                        class="mr-[16px] w-[32px] h-[32px]" size="32"
                                        src="./images/MenuGainersLosersIcon.svg" alt="no image">Gainers & Losers
                                </a>
                                <a target="_self" href="/charts/"
                                    class="grid submenu-item cmc-link items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto; "><img
                                        class="mr-[16px] w-[32px] h-[32px]" size="32"
                                        src="./images/MenuGlobalChartsIcon.svg" alt="no image">Global Charts
                                </a>
                                <a target="_self" href="/historical/"
                                    class="grid submenu-item cmc-link items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto; "><img
                                        class="mr-[16px] w-[32px] h-[32px]" size="32" src="./images/MenuHistoryIcon.svg"
                                        alt="no image">Historical Snapshots
                                </a>
                                <hr class="my-[12px] mx-0 h-[1px]" style="background-color: #eff2f5;">
                                <a target="_self" href="/price-estimates"
                                    class="grid submenu-item cmc-link items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto; "><img
                                        class="mr-[16px] w-[32px] h-[32px]" size="32"
                                        src="./images/MenuPriceEstimateIcon.svg" alt="no image">Price Estimates
                                </a>
                                <a target="_self" href="/polkadot-parachains/polkadot"
                                    class="grid submenu-item cmc-link items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto; "><img
                                        class="mr-[16px] w-[32px] h-[32px]" size="32"
                                        src="./images/MenuPolkadotIcon.svg" alt="no image">Polkadot Parachains
                                </a>
                                <a target="_self" href="/legal-tender-countries"
                                    class="grid submenu-item cmc-link items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto; "><img
                                        class="mr-[16px] w-[32px] h-[32px]" size="32" src="./images/MenuLegalIcon.svg"
                                        alt="no image">Legal Tender Countries
                                </a>
                                <a target="_self" href="/fiat-currencies"
                                    class="grid submenu-item cmc-link items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto; "><img
                                        class="mr-[16px] w-[32px] h-[32px]" size="32" src="./images/MenuFiatsIcon.svg"
                                        alt="no image">Fiats / Companies Rankings
                                </a>
                            </div>
                        </div>
                        <div class="grow shrink basis-[0%]" style="max-width: 24px;min-width: 12px;">
                        </div>
                        <div
                            class="menu-dropdown-exchanges-link text-[14px] font-[600] leading-[21px] cursor-pointer inline-block relative">
                            <a href="/rankings/exchanges/"
                                class="hover:text-[#1070E0] cmc-link py-0 pr-[8px] pl-0 text-black flex items-center"
                                style="min-height: 61px;">Exchanges</a>
                            <div class="submenu-exchanges hover:block hover:opacity-1 p-[16px] bg-white absolute z-9999 mt-0 hidden whitespace-nowrap left-[50%] translate-x-[-50%] items-center"
                                style="filter: drop-shadow(rgba(128, 138, 157, 0.12) 0px 1px 2px) drop-shadow(rgba(128, 138, 157, 0.24) 0px 8px 32px);color: unset;min-height: 61px; border-radius: 8px;">
                                <a class="grid submenu-item cmc-link items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto;" target="_self"
                                    href="/rankings/exchanges/"><img class="mr-[16px] w-[32px] h-[32px]" size="32"
                                        src="./images/MenuSpotIcon.svg" alt="no image">Spot</a>
                                <a class="grid submenu-item cmc-link items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto;" target="_self"
                                    href="/rankings/exchanges/derivatives/"><img class="mr-[16px] w-[32px] h-[32px]"
                                        size="32" src="./images/MenuDerivativesIcon.svg" alt="no image">Derivatives</a>
                                <a class="grid submenu-item cmc-link items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto;" target="_self"
                                    href="/rankings/exchanges/dex/"><img class="mr-[16px] w-[32px] h-[32px]" size="32"
                                        src="./images/MenuDexIcon.svg" alt="no image">Derivatives</a>
                            </div>
                        </div>
                        <div class="grow shrink basis-[0%]" style="max-width: 24px;min-width: 12px;"></div>
                        <div
                            class="menu-dropdown-NFTs-link text-[14px] font-[600] leading-[21px] cursor-pointer inline-block relative">
                            <a href="/nft/"
                                class="hover:text-[#1070E0] cmc-link py-0 pr-[8px] pl-0 text-black flex items-center"
                                style="min-height: 61px;">NFT</a>
                            <div class="submenu-NFTs hover:block hover:opacity-1 p-[16px] bg-white absolute z-9999 mt-0 hidden whitespace-nowrap left-[50%] translate-x-[-50%] items-center"
                                style="filter: drop-shadow(rgba(128, 138, 157, 0.12) 0px 1px 2px) drop-shadow(rgba(128, 138, 157, 0.24) 0px 8px 32px);color: unset;min-height: 61px;">
                                <a class="grid items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto;" target="_self"
                                    href="/nft/"><img class="mr-[16px] w-[32px] h-[32px]" size="32"
                                        src="./images/MenuNFTOverview.svg" alt="no image">Overall NFT Stats</a>
                                <a class="grid items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto;" target="_self"
                                    href="/nft/collections/"><img class="mr-[16px] w-[32px] h-[32px]" size="32"
                                        src="./images/MenuDerivativesIcon.svg" alt="no image">Derivatives</a>
                                <a class="grid items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto;" target="_self"
                                    href="/nft/upcoming/"><svg class="mr-[16px] w-[32px] h-[32px]" width="40"
                                        height="40" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="16" cy="16" r="16" fill="#16C784"></circle>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.6667 9.33325C12.2065 9.33325 11.8334 9.70635 11.8334 10.1666V10.9999H11C10.0796 10.9999 9.33337 11.7461 9.33337 12.6666V20.9999C9.33337 21.9204 10.0796 22.6666 11 22.6666H21C21.9205 22.6666 22.6667 21.9204 22.6667 20.9999V12.6666C22.6667 11.7461 21.9205 10.9999 21 10.9999H20.1667V10.1666C20.1667 9.70635 19.7936 9.33325 19.3334 9.33325C18.8731 9.33325 18.5 9.70635 18.5 10.1666V10.9999H13.5V10.1666C13.5 9.70635 13.1269 9.33325 12.6667 9.33325ZM12.6667 13.4999C12.2065 13.4999 11.8334 13.873 11.8334 14.3333C11.8334 14.7935 12.2065 15.1666 12.6667 15.1666H19.3334C19.7936 15.1666 20.1667 14.7935 20.1667 14.3333C20.1667 13.873 19.7936 13.4999 19.3334 13.4999H12.6667Z"
                                            fill="white"></path>
                                    </svg>Upcoming Sales</a>
                            </div>
                        </div>
                        <div class="grow shrink basis-[0%]" style="max-width: 24px;min-width: 12px;"></div>
                        <div
                            class="CrypTown-link text-[14px] font-[600] leading-[21px] cursor-pointer inline-block relative">
                            <a href="/cryptown/"
                                class="hover:text-[#1070E0] cmc-link py-0 pr-[8px] pl-0 text-black flex items-center"
                                style="min-height: 61px;">
                                <span class="hover:text-inherit relative inline text-black">CrypTown</span>
                            </a>
                        </div>
                        <div class="grow shrink basis-[0%]" style="max-width: 24px;min-width: 12px;"></div>
                        <div
                            class="Portfolio-link text-[14px] font-[600] leading-[21px] cursor-pointer inline-block relative">
                            <a href="/portfolio-tracker/"
                                class="hover:text-[#1070E0] cmc-link py-0 pr-[8px] pl-0 text-black flex items-center"
                                style="min-height: 61px;">
                                Portfolio
                            </a>
                        </div>
                        <div class="grow shrink basis-[0%]" style="max-width: 24px;min-width: 12px;"></div>
                        <div
                            class="Watchlist-link text-[14px] font-[600] leading-[21px] cursor-pointer inline-block relative">
                            <a href="/watchlist/"
                                class="hover:text-[#1070E0] cmc-link py-0 pr-[8px] pl-0 text-black flex items-center"
                                style="min-height: 61px;">
                                Watchlist
                            </a>
                        </div>
                        <div class="grow shrink basis-[0%]" style="max-width: 24px;min-width: 12px;"></div>
                        <div
                            class="menu-dropdown-Products-link text-[14px] font-[600] leading-[21px] cursor-pointer inline-block relative">
                            <span class="hover:text-[#1070E0] py-0 pr-[8px] pl-0 text-black flex items-center"
                                style="min-height: 61px;">
                                <span class="relative inline text-inherit">Products</span>
                            </span>
                            <div class="submenu-Products bg-white hover:flex hover:opacity-100 hover:text-[#3861fb] py-[24px] px-[19px] absolute z-9999 mt-0 hidden whitespace-nowrap left-[50%] translate-x-[-50%] items-center min-h-[61px]"
                                style="border-radius: 8px;filter: drop-shadow(rgba(128, 138, 157, 0.12) 0px 1px 2px) drop-shadow(rgba(128, 138, 157, 0.24) 0px 8px 32px);color: unset;">
                                <div class="Products mx-[10px] self-start">
                                    <p class="opacity-40 leading-[1.5] mb-[10px] ml-[10px] text-[14px] text-[#161724]">
                                        PRODUCTS</p>
                                    <div class="static left-0 p-0 sepia-0">
                                        <a class="grid items-center p-[8px] text-black"
                                            style="grid-template-columns: max-content auto auto auto;" target="_self"
                                            href="/converter/">
                                            <img class="mr-[16px] w-[32px] h-[32px]"
                                                src="./images/MenuConverterIcon.svg" alt="no image">Converter
                                        </a>
                                        <a class="grid items-center p-[8px] text-black"
                                            style="grid-template-columns: max-content auto auto auto;" target="_blank"
                                            href="https://coinmarketcap.com/mobile/">
                                            <img class="mr-[16px] w-[32px] h-[32px]"
                                                src="./images/MenuMobileAppIcon.svg" alt="no image">Mobile Apps <svg
                                                class="w-[16px] h-[16px] ml-[6px] m-0"
                                                xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                                viewBox="0 0 24 24" fill="none" class="sc-1prm8qw-0 eFjnQR ext"><svg
                                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.0002 7.99969L13.3335 2.6665M13.3335 2.6665H9.4547M13.3335 2.6665L13.3335 6.54518M6.54566 4.60614H3.85205C3.19749 4.60614 2.66687 5.13675 2.66687 5.79129V12.148C2.66687 12.8026 3.19749 13.3332 3.85205 13.3332H10.209C10.8635 13.3332 11.3941 12.8026 11.3941 12.148V9.45449"
                                                        stroke="#A6B0C3" stroke-width="1.5" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg></svg>
                                        </a>
                                        <a class="grid items-center p-[8px] text-black"
                                            style="grid-template-columns: max-content auto auto auto;" target="_blank"
                                            href="https://blockchain.coinmarketcap.com">
                                            <img class="mr-[16px] w-[32px] h-[32px]" src="./images/MenuExplorerIcon.svg"
                                                alt="no image">Blockchain Explorer<svg
                                                class="w-[16px] h-[16px] ml-[6px] m-0"
                                                xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                                viewBox="0 0 24 24" fill="none" class="sc-1prm8qw-0 eFjnQR ext"><svg
                                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.0002 7.99969L13.3335 2.6665M13.3335 2.6665H9.4547M13.3335 2.6665L13.3335 6.54518M6.54566 4.60614H3.85205C3.19749 4.60614 2.66687 5.13675 2.66687 5.79129V12.148C2.66687 12.8026 3.19749 13.3332 3.85205 13.3332H10.209C10.8635 13.3332 11.3941 12.8026 11.3941 12.148V9.45449"
                                                        stroke="#A6B0C3" stroke-width="1.5" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg></svg>
                                        </a>
                                        <a class="grid items-center p-[8px] text-black"
                                            style="grid-template-columns: max-content auto auto auto;" target="_blank"
                                            href="https://jobs.coinmarketcap.com">
                                            <img class="mr-[16px] w-[32px] h-[32px]"
                                                src="./images/MenuJobsBoardIcon.svg" alt="no image">Jobs Board<svg
                                                class="w-[16px] h-[16px] ml-[6px] m-0"
                                                xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                                viewBox="0 0 24 24" fill="none" class="sc-1prm8qw-0 eFjnQR ext"><svg
                                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.0002 7.99969L13.3335 2.6665M13.3335 2.6665H9.4547M13.3335 2.6665L13.3335 6.54518M6.54566 4.60614H3.85205C3.19749 4.60614 2.66687 5.13675 2.66687 5.79129V12.148C2.66687 12.8026 3.19749 13.3332 3.85205 13.3332H10.209C10.8635 13.3332 11.3941 12.8026 11.3941 12.148V9.45449"
                                                        stroke="#A6B0C3" stroke-width="1.5" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg></svg>
                                        </a>
                                        <hr class="h-[1px] bg-[#eff2f5]" style="margin:12px 0;border-width: 0px;">
                                        <a class="grid items-center p-[8px] text-black"
                                            style="grid-template-columns: max-content auto auto auto;" target="_blank"
                                            href="https://coinmarketcap.com/api/">
                                            <img class="mr-[16px] w-[32px] h-[32px]"
                                                src="./images/MenuCryptoApiIcon.light.svg" alt="no image">Crypto API<svg
                                                class="w-[16px] h-[16px] ml-[6px] m-0"
                                                xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                                viewBox="0 0 24 24" fill="none" class="sc-1prm8qw-0 eFjnQR ext"><svg
                                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.0002 7.99969L13.3335 2.6665M13.3335 2.6665H9.4547M13.3335 2.6665L13.3335 6.54518M6.54566 4.60614H3.85205C3.19749 4.60614 2.66687 5.13675 2.66687 5.79129V12.148C2.66687 12.8026 3.19749 13.3332 3.85205 13.3332H10.209C10.8635 13.3332 11.3941 12.8026 11.3941 12.148V9.45449"
                                                        stroke="#A6B0C3" stroke-width="1.5" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg></svg>
                                        </a>
                                        <a class="grid items-center p-[8px] text-black"
                                            style="grid-template-columns: max-content auto auto auto;" target="_self"
                                            href="/widget/">
                                            <img class="mr-[16px] w-[32px] h-[32px]"
                                                src="./images/MenuWidgetsIcon.light.svg" alt="no image">Site Widgets
                                        </a>
                                    </div>
                                </div>
                                <div class="Campaigns mx-[10px] self-start">
                                    <p class="opacity-40 leading-[1.5] mb-[10px] ml-[10px] text-[14px] text-[#161724]">
                                        CAMPAIGNS</p>
                                    <div class="static left-0 p-0 sepia-0">
                                        <a class="grid items-center p-[8px] text-black"
                                            style="grid-template-columns: max-content auto auto auto;" target="_self"
                                            href="/airdrop">
                                            <img class="mr-[16px] w-[32px] h-[32px]" src="./images/MenuAirdropsIcon.svg"
                                                alt="no image">Airdrops
                                        </a>
                                        <a class="grid items-center p-[8px] text-black"
                                            style="grid-template-columns: max-content auto auto auto;" target="_self"
                                            href="/account/rewards">
                                            <img class="mr-[16px] w-[32px] h-[32px]" src="./images/MenuRewardsIcon.svg"
                                                alt="no image">Rewards
                                        </a>
                                        <a class="grid items-center p-[8px] text-black"
                                            style="grid-template-columns: max-content auto auto auto;" target="_blank"
                                            href="https://coinmarketcap.com/earn/">
                                            <img class="mr-[16px] w-[32px] h-[32px]"
                                                src="./images/MenuEarnCryptoIcon.svg" alt="no image">Earn Crypto<svg
                                                class="w-[16px] h-[16px] ml-[6px] m-0"
                                                xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                                viewBox="0 0 24 24" fill="none" class="sc-1prm8qw-0 eFjnQR ext"><svg
                                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.0002 7.99969L13.3335 2.6665M13.3335 2.6665H9.4547M13.3335 2.6665L13.3335 6.54518M6.54566 4.60614H3.85205C3.19749 4.60614 2.66687 5.13675 2.66687 5.79129V12.148C2.66687 12.8026 3.19749 13.3332 3.85205 13.3332H10.209C10.8635 13.3332 11.3941 12.8026 11.3941 12.148V9.45449"
                                                        stroke="#A6B0C3" stroke-width="1.5" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg></svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="Calendars mx-[10px] self-start">
                                    <p class="opacity-40 leading-[1.5] mb-[10px] ml-[10px] text-[14px] text-[#161724]">
                                        CAMPAIGNS</p>
                                    <div class="static left-0 p-0 sepia-0">
                                        <a class="grid items-center p-[8px] text-black"
                                            style="grid-template-columns: max-content auto auto auto;" target="_self"
                                            href="/ico-calendar">
                                            <img class="mr-[16px] w-[32px] h-[32px]" src="./images/MenuICOIcon.svg"
                                                alt="no image">ICO Calendar
                                        </a>
                                        <a class="grid items-center p-[8px] text-black"
                                            style="grid-template-columns: max-content auto auto auto;" target="_self"
                                            href="/events">
                                            <img class="mr-[16px] w-[32px] h-[32px]" src="./images/MenuEvents2Icon.svg"
                                                alt="no image">Events Calendar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grow shrink basis-[0%]" style="max-width: 24px;min-width: 12px;"></div>
                        <div
                            class="menu-dropdown-Learn-link text-[14px] font-[600] leading-[21px] cursor-pointer inline-block relative">
                            <span class=" hover:text-[#1070E0] cmc-link py-0 pr-[8px] pl-0 text-black flex items-center"
                                style="min-height: 61px;">
                                Learn
                            </span>
                            <div class="submenu-Learn p-[16px] bg-white absolute z-9999 mt-0 hidden whitespace-nowrap left-[50%] translate-x-[-50%] items-center "
                                style="border-radius: 8px;filter: drop-shadow(rgba(128, 138, 157, 0.12) 0px 1px 2px) drop-shadow(rgba(128, 138, 157, 0.24) 0px 8px 32px);color: unset;min-height: 61px;">
                                <a class="grid items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto;" target="_blank"
                                    href="https://coinmarketcap.com/alexandria/">
                                    <img class="mr-[16px] w-[32px] h-[32px]" src="./images/MenuAlexandriaIcon.svg"
                                        alt="no image">Alexandria<svg class="w-[16px] h-[16px] ml-[6px]"
                                        xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                        viewBox="0 0 24 24" fill="none" class="sc-1prm8qw-0 eFjnQR ext"><svg
                                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.0002 7.99969L13.3335 2.6665M13.3335 2.6665H9.4547M13.3335 2.6665L13.3335 6.54518M6.54566 4.60614H3.85205C3.19749 4.60614 2.66687 5.13675 2.66687 5.79129V12.148C2.66687 12.8026 3.19749 13.3332 3.85205 13.3332H10.209C10.8635 13.3332 11.3941 12.8026 11.3941 12.148V9.45449"
                                                stroke="#A6B0C3" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></svg>
                                </a>
                                <a class="grid items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto;" target="_blank"
                                    href="https://www.youtube.com/channel/UCnhdZlwVd6ocXGhdSyV9Axg?sub_confirmation=1">
                                    <img class="mr-[16px] w-[32px] h-[32px]" src="./images/MenuVideosIcon.svg"
                                        alt="no image">Videos<svg class="w-[16px] h-[16px] ml-[6px]"
                                        xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                        viewBox="0 0 24 24" fill="none" class="sc-1prm8qw-0 eFjnQR ext"><svg
                                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.0002 7.99969L13.3335 2.6665M13.3335 2.6665H9.4547M13.3335 2.6665L13.3335 6.54518M6.54566 4.60614H3.85205C3.19749 4.60614 2.66687 5.13675 2.66687 5.79129V12.148C2.66687 12.8026 3.19749 13.3332 3.85205 13.3332H10.209C10.8635 13.3332 11.3941 12.8026 11.3941 12.148V9.45449"
                                                stroke="#A6B0C3" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></svg>
                                </a>
                                <a class="grid items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto;" target="_blank"
                                    href="https://coinmarketcap.com/alexandria/categories/market-musing">
                                    <img class="mr-[16px] w-[32px] h-[32px]" src="./images/MenuMarketUpdatesIcon.svg"
                                        alt="no image">Market Updates<svg class="w-[16px] h-[16px] ml-[6px]"
                                        xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                        viewBox="0 0 24 24" fill="none" class="sc-1prm8qw-0 eFjnQR ext"><svg
                                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.0002 7.99969L13.3335 2.6665M13.3335 2.6665H9.4547M13.3335 2.6665L13.3335 6.54518M6.54566 4.60614H3.85205C3.19749 4.60614 2.66687 5.13675 2.66687 5.79129V12.148C2.66687 12.8026 3.19749 13.3332 3.85205 13.3332H10.209C10.8635 13.3332 11.3941 12.8026 11.3941 12.148V9.45449"
                                                stroke="#A6B0C3" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></svg>
                                </a>
                                <a class="grid items-center p-[8px] text-black"
                                    style="grid-template-columns: max-content auto auto auto;" target="_blank"
                                    href="https://coinmarketcap.com/alexandria/glossary">
                                    <img class="mr-[16px] w-[32px] h-[32px]" src="./images/MenuGlossaryIcon.svg"
                                        alt="no image">Glossary<svg class="w-[16px] h-[16px] ml-[6px]"
                                        xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                        viewBox="0 0 24 24" fill="none" class="sc-1prm8qw-0 eFjnQR ext"><svg
                                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.0002 7.99969L13.3335 2.6665M13.3335 2.6665H9.4547M13.3335 2.6665L13.3335 6.54518M6.54566 4.60614H3.85205C3.19749 4.60614 2.66687 5.13675 2.66687 5.79129V12.148C2.66687 12.8026 3.19749 13.3332 3.85205 13.3332H10.209C10.8635 13.3332 11.3941 12.8026 11.3941 12.148V9.45449"
                                                stroke="#A6B0C3" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pl-[8px]">
                    <div class="popover">
                        <div class="cmc-popover__trigger">
                            <a class="flex p-[8px] rounded-[50%] bottom-[2px] relative" href="/account/my-diamonds/">
                                <img class="w-[20px]" src="./images//diamond-icon.svg" alt="no image">
                            </a>
                        </div>
                    </div>
                </div>
                <button
                    class="h-[36px] whitespace-nowrap items-center bg-transparent border-0 inline-flex text-black cursor-pointer content-center outline-none font-[600] w-auto h-[32px] text-[12px] px-[16px] leading-[18px]"
                    style="border-radius: 8px;">Log In</button>
                <button
                    class="h-[36px] whitespace-nowrap items-center bg-[#3861FB] border-0 inline-flex text-white cursor-pointer content-center outline-none font-[600] w-auto h-[32px] text-[12px] px-[16px] leading-[18px]"
                    style="border-radius: 8px;">Sign up</button>
                <div aria-expanded="false">
                    <div class="bg-[#EFF2F5] text-[#A6B0C3] p-[8px] flex flex-row items-center cursor-pointer ml-[8px]"
                        style="border-radius: 8px;"><svg class="m-0 h-[16px] w-[16px]"
                            xmlns="http://www.w3.org/2000/svg" fill="none" height="16px" width="16px"
                            viewBox="0 0 24 24" class="sc-16r8icm-0 coGWQa">
                            <path
                                d="M16.4153 16.4153L20 20M18.5455 11.2727C18.5455 15.2893 15.2894 18.5454 11.2728 18.5454C7.25612 18.5454 4 15.2893 4 11.2727C4 7.2561 7.25612 4 11.2728 4C15.2894 4 18.5455 7.2561 18.5455 11.2727Z"
                                stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>

                        <div
                            class="flex flex-1 font-[600] text-[12px] ml-[4px] w-[100px] whitespace-nowrap overflow-ellipsis text-[#A6B0C3] cursor: pointer;">
                            Search</div>
                        <div class="h-[20px] w-[20px] bg-[#A6B0C3] text-white leading-[20px] text-center cursor: pointer;"
                            style="border-radius: 4px;">/</div>
                    </div>
                </div>
            </nav>
            <div class="h-[1px] bg-[#EFF2F5]"></div>
            <div id="nav-slider" class="max-w-[1402px] px-[16px] mx-auto z-0">
                <div style="padding-top:1px">
                    <div>
                        <div class="relative" style="margin-top: 16px;">
                            <div id="owl-slider-1" class="owl-carousel owl-theme whitespace-nowrap w-full">
                                <a href="https://www.youtube.com/embed/lCxC4x6SG2g?autoplay=1&mute=0&controls=1&origin=https%3A%2F%2Fcoinmarketcap.com&playsinline=1&showinfo=0&rel=0&iv_load_policy=3&modestbranding=1&enablejsapi=1&widgetid=1 "
                                    class="owl-slider-1-item item w-[280px] inline-block align-text-top text-[#3861FB] cursor-pointer"
                                    target="_blank" rel="noreferrer">
                                    <div class="w-full h-[136px] mb-[16px]">

                                        <div
                                            class="relative w-full h-full before:content-['awdawdawdw'] before:w-[68px] before:h-[48px] before:bg-youtube-button before:block before:absolute before:left-[50%] before:top-[50%]  before:z-1 before:translate-x-[-50%]  before:translate-y-[-50%]  before:opacity-70 before:transition-all before:duration-300 ease-in-out delay-0">
                                            <img class="object-cover w-full h-full relative"
                                                style="border-radius: 8px;transition: all 0.3s ease 0s;"
                                                src="https://s2.coinmarketcap.com/static/new-alerts/61eaf7492f29840013760da4/img/1650333860492_What-is-a-Crypto-Faucet-Thumbnail_280x136.jpg"
                                                loading="eager" alt="no image">
                                        </div>

                                        <p
                                            class="text-[12px] leading-[18px] text-[#58667e] my-0 mx-auto overflow-hidden text-ellipsis">
                                            Crypto Deep Dive</p>
                                        <p class="text-[14px] text-black my-0 mx-auto overflow-hidden text-ellipsis">
                                            What's a Crypto Faucet? </p>
                                    </div>
                                </a>
                                <a href="https://www.youtube.com/embed/lCxC4x6SG2g?autoplay=1&mute=0&controls=1&origin=https%3A%2F%2Fcoinmarketcap.com&playsinline=1&showinfo=0&rel=0&iv_load_policy=3&modestbranding=1&enablejsapi=1&widgetid=1 "
                                    class="owl-slider-1-item item w-[280px] inline-block align-text-top text-[#3861FB] cursor-pointer"
                                    target="_blank" rel="noreferrer">
                                    <div class="w-full h-[136px] mb-[16px]">

                                        <div
                                            class="relative w-full h-full before:content-['awdawdawdw'] before:w-[68px] before:h-[48px] before:bg-youtube-button before:block before:absolute before:left-[50%] before:top-[50%]  before:z-1 before:translate-x-[-50%]  before:translate-y-[-50%]  before:opacity-70 before:transition-all before:duration-300 ease-in-out delay-0">
                                            <img class="object-cover w-full h-full relative"
                                                style="border-radius: 8px;transition: all 0.3s ease 0s;"
                                                src="https://s2.coinmarketcap.com/static/new-alerts/61eaf7492f29840013760da4/img/1650333860492_What-is-a-Crypto-Faucet-Thumbnail_280x136.jpg"
                                                loading="eager" alt="no image">
                                        </div>

                                        <p
                                            class="text-[12px] leading-[18px] text-[#58667e] my-0 mx-auto overflow-hidden text-ellipsis">
                                            Crypto Deep Dive</p>
                                        <p class="text-[14px] text-black my-0 mx-auto overflow-hidden text-ellipsis">
                                            What's a Crypto Faucet? </p>
                                    </div>
                                </a>
                                <a href="https://www.youtube.com/embed/lCxC4x6SG2g?autoplay=1&mute=0&controls=1&origin=https%3A%2F%2Fcoinmarketcap.com&playsinline=1&showinfo=0&rel=0&iv_load_policy=3&modestbranding=1&enablejsapi=1&widgetid=1 "
                                    class="owl-slider-1-item item w-[280px] inline-block align-text-top text-[#3861FB] cursor-pointer"
                                    target="_blank" rel="noreferrer">
                                    <div class="w-full h-[136px] mb-[16px]">

                                        <div
                                            class="relative w-full h-full before:content-['awdawdawdw'] before:w-[68px] before:h-[48px] before:bg-youtube-button before:block before:absolute before:left-[50%] before:top-[50%]  before:z-1 before:translate-x-[-50%]  before:translate-y-[-50%]  before:opacity-70 before:transition-all before:duration-300 ease-in-out delay-0">
                                            <img class="object-cover w-full h-full relative"
                                                style="border-radius: 8px;transition: all 0.3s ease 0s;"
                                                src="https://s2.coinmarketcap.com/static/new-alerts/61eaf7492f29840013760da4/img/1650333860492_What-is-a-Crypto-Faucet-Thumbnail_280x136.jpg"
                                                loading="eager" alt="no image">
                                        </div>

                                        <p
                                            class="text-[12px] leading-[18px] text-[#58667e] my-0 mx-auto overflow-hidden text-ellipsis">
                                            Crypto Deep Dive</p>
                                        <p class="text-[14px] text-black my-0 mx-auto overflow-hidden text-ellipsis">
                                            What's a Crypto Faucet? </p>
                                    </div>
                                </a>
                                <a href="https://www.youtube.com/embed/lCxC4x6SG2g?autoplay=1&mute=0&controls=1&origin=https%3A%2F%2Fcoinmarketcap.com&playsinline=1&showinfo=0&rel=0&iv_load_policy=3&modestbranding=1&enablejsapi=1&widgetid=1 "
                                    class="owl-slider-1-item item w-[280px] inline-block align-text-top text-[#3861FB] cursor-pointer"
                                    target="_blank" rel="noreferrer">
                                    <div class="w-full h-[136px] mb-[16px]">

                                        <div
                                            class="relative w-full h-full before:content-['awdawdawdw'] before:w-[68px] before:h-[48px] before:bg-youtube-button before:block before:absolute before:left-[50%] before:top-[50%]  before:z-1 before:translate-x-[-50%]  before:translate-y-[-50%]  before:opacity-70 before:transition-all before:duration-300 ease-in-out delay-0">
                                            <img class="object-cover w-full h-full relative"
                                                style="border-radius: 8px;transition: all 0.3s ease 0s;"
                                                src="https://s2.coinmarketcap.com/static/new-alerts/61eaf7492f29840013760da4/img/1650333860492_What-is-a-Crypto-Faucet-Thumbnail_280x136.jpg"
                                                loading="eager" alt="no image">
                                        </div>

                                        <p
                                            class="text-[12px] leading-[18px] text-[#58667e] my-0 mx-auto overflow-hidden text-ellipsis">
                                            Crypto Deep Dive</p>
                                        <p class="text-[14px] text-black my-0 mx-auto overflow-hidden text-ellipsis">
                                            What's a Crypto Faucet? </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="main-content" class="max-w-[1402px] px-[16px] mx-auto">
            <div id="today-cryptocurrency-prices" class="flex content-between items-center">
                <section class="flex w-full flex-row pt-[24px] pb-[24px] m-0">
                    <div class="mr-[24px]">
                        <h1 class="text-[24px] leading-[34px] mt-[8px] mb-[4px] font-[700] text-[#171924]">Today's
                            Cryptocurrency Prices by Market Cap</h1>
                        <div>
                            <div class="mr-[4px]">
                                <p class="inline leading-[1.5] m-0 text-[#58667E] text-[14px]">The global crypto market
                                    cap is <span
                                        class="leading-[1.5] m-0 text-[#58667E] font-[600] text-[14px]">$1.93T</span>, a
                                    <span class="text-[#16c784] p-0 font-[600] whitespace-nowrap"
                                        style="border-radius: 8px;"><span
                                            class="fa-solid fa-caret-up mr-[4px] align-bottom text-inherit"></span>2.13%</span>
                                    increase over the last day.
                                </p>
                                <div class="inline-block m-0 text-[#808A9D] cursor-pointer underline"
                                    style="margin-left: 0.5em;">Read More</div>

                            </div>
                        </div>
                    </div>
                </section>
                <div class="flex items-center self-start pt-[32px]">
                    <span class="text-[14px] text-[#58667e] mr-[8px]">Highlights</span>
                    <div class="overflow-hidden h-[24px] w-[48px] shrink-0">
                        <div class="relative w-full h-full">
                            <input type="checkbox" id="1" class="h-0 w-0 hidden">
                            <label
                                class="flex items-center content-between cursor-pointer w-full h-full relative bg-[#CFD6E4]"
                                style="border-radius: 100px;transition: background-color 0.2s ease 0s;" id="1" for="1">
                                <span
                                    class="switch-button content-[''] absolute top-[3px] left-[3px] w-[18px] h-[18px] bg-white"
                                    style="border-radius: 100%;transition: all 0.2s ease 0s;box-shadow: rgb(10 10 10 / 29%) 0px 0px 2px 0px;"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div id="categories-and-tools flex items-center flex-wrap">
                <div
                    class="m-0  w-full flex-nowrap flex flex-row justify-between items-center overflow-visible h-[64px] relative whitespace-nowrap">
                    <div class="flex flex-row items-center">
                        <div class="flex items-center">
                            <a href="/watchlist/" class="cmc-link no-underline">
                                <button
                                    class="flex items-center py-[5px] px-[8px] whitespace-nowrap mr-[4px] text-black bg-[#EFF2F5] border-0 cursor-pointer content-center outline-none font-[600] w-auto h-[32px] text-[12px] leading-[18px]"
                                    style="border-radius: 8px;"><span
                                        class="fa-regular fa-star icon-Star whitespace-nowrap text-black"
                                        style="font-size: 1.3em;"></span><span class="watchlist-star-text ml-[4px]"
                                        style="color: unset;">Watchlist</span></button>
                            </a>
                            <a href="/portfolio-tracker/" class="cmc-link no-underline">
                                <button
                                    class="flex items-center py-[5px] px-[8px] whitespace-nowrap mr-[4px] text-black bg-[#EFF2F5] border-0 rounded-[8px] cursor-pointer content-center outline-none font-[600] w-auto h-[32px] texxt-[12px] leading-[18px]"><svg
                                        style="width: 1.3em;" xmlns="http://www.w3.org/2000/svg" height="24px"
                                        width="24px" viewBox="0 0 24 24" class="sc-16r8icm-0 jZwKai">
                                        <path d="M13.8182 2H13V11H22V10.1818C22 5.68182 18.3182 2 13.8182 2Z"
                                            fill="#A6B0C3"></path>
                                        <path
                                            d="M11.35 5H10.5C5.825 5 2 8.825 2 13.5C2 18.175 5.825 22 10.5 22C15.175 22 19 18.175 19 13.5V12.65H11.35V5Z"
                                            fill="#CFD6E4"></path>
                                    </svg><span class="watchlist-star-text ml-[4px] text-[12px]"
                                        style="color: unset;">Portfolio</span></button>
                            </a>
                            <div class="h-[16px] w-[1px] mx-[16px] bg-[#CFD6E4]"></div>
                        </div>
                        <a class="underline-none text-[#3861FB] cursor-pointer"><button
                                class="category-button-clicked category-button">Cryptocurrencies</button>
                        </a>
                        <a class="underline-none text-[#3861FB] cursor-pointer"><button
                                class="category-button category-button-not-clicked">Categories</button>
                        </a>
                        <a class="underline-none text-[#3861FB] cursor-pointer"><button
                                class="category-button category-button-not-clicked">DeFi</button>
                        </a>
                        <a class="underline-none text-[#3861FB] cursor-pointer"><button
                                class="category-button category-button-not-clicked">NFT</button>
                        </a>
                        <a class="underline-none text-[#3861FB] cursor-pointer"><button
                                class="category-button category-button-not-clicked">Metaverse</button>
                        </a>
                        <a class="underline-none text-[#3861FB] cursor-pointer"><button
                                class="category-button category-button-not-clicked">Polkadot</button>
                        </a>
                        <a class="underline-none text-[#3861FB] cursor-pointer"><button
                                class="category-button category-button-not-clicked">BNB Chain</button>
                        </a>
                        <a class="underline-none text-[#3861FB] cursor-pointer"><button
                                class="category-button category-button-not-clicked">Solana</button>
                        </a>
                        <a class="underline-none text-[#3861FB] cursor-pointer"><button
                                class="category-button category-button-not-clicked">Avalanche</button>
                        </a>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="flex flex-row items-center whitespace-nowrap m-0 ">
                            <p class="leading-[1.5] my-0 mr-[6px] text-[#58667E] text-[12px]">Show rows</p>
                            <div
                                class="m-0 inline-flex flex-row items-center bg-[#EFF2F5] rounded-[8px] outline-none font-[600] cursor-pointer text-black py-[5px] px-[8px] text-[12px] leading-[22px]">
                                20
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="14" width="14"
                                    viewBox="0 0 24 24" class="sc-16r8icm-0 dWGZqy">
                                    <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <button
                                class="white-space-nowrap py-0 px-[8px] ml-[2px] items-center bg-[#EFF2F5] border-none rounded-[8px] inline-flex text-black cursor-pointer content-center outline-none font-[600] w-auto h-[32px] text-[12px] leading-[18px]">
                                <span class="items-center flex content-center ml-0 mr-[8px] text-black"><span
                                        class="fa-solid fa-sliders items-center flex content-center ml-0 mr-[8px] whitespace-nowrap"></span>
                                    Filters</span>
                            </button>
                            <button
                                class="white-space-nowrap py-0 px-[8px] ml-[8px] items-center bg-[#EFF2F5] border-none  rounded-[8px] inline-flex cursor-pointer content-center outline-none font-[600] w-auto h-[32px] text-[12px] leading-[18px]"><span
                                    class="items-center flex content-center ml-0 mr-[8px]"><svg
                                        style="fill: #a6b0c3; color: black" width="14" height="12" viewBox="0 0 14 12"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.4167 0H1.58337C0.893009 0 0.333374 0.575625 0.333374 1.28571V10.7143C0.333374 11.4244 0.893009 12 1.58337 12H12.4167C13.1071 12 13.6667 11.4244 13.6667 10.7143V1.28571C13.6667 0.575625 13.1071 0 12.4167 0ZM6.16671 10.2857H2.00004V7.71429H6.16671V10.2857ZM6.16671 6H2.00004V3.42857H6.16671V6ZM12 10.2857H7.83337V7.71429H12V10.2857ZM12 6H7.83337V3.42857H12V6Z">
                                        </path>
                                    </svg></span>Customize
                            </button>
                            <button
                                class="white-space-nowrap h-[32px] p-[3px] ml-[5px] items-center bg-[#EFF2F5] border-none rounded-[8px] inline-flex text-black cursor-pointer content-center outline-none font-[600] w-auto text-[14px] leading-[24px]">
                                <span class="tableListActived tableListTab bg-white w-[30px] h-[26px] rounded-[6px]"><i
                                        class="fa-solid fa-bars"></i></span>
                                <span
                                    class="treeMapTab relative w-[30px] h-[26px] rounded-[6px] whitespace-nowrap"><span
                                        class="w-[30px] h-[26px] round-[6px] block absolute top-[-16px] right-[-6px]"><span
                                            class="spinner w-[6px] h-[6px] absolute top-[16px] left-[16px] bg-[#3861FB] rounded-full block"></span></span><svg
                                        class="relative top-[4px] left-[4px] m-0 h-[24px] w-[24px]"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24px"
                                        width="24px" viewBox="0 0 24 24" class="sc-16r8icm-0 jZwKai"><svg
                                            class="relative top-[4px] left-[4px]" width="17" height="16"
                                            viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.16699 2.66669C3.61471 2.66669 3.16699 3.1144 3.16699 3.66669V6.33335C3.16699 6.88564 3.61471 7.33335 4.16699 7.33335H6.83366C7.38594 7.33335 7.83366 6.88564 7.83366 6.33335V3.66669C7.83366 3.1144 7.38594 2.66669 6.83366 2.66669H4.16699ZM10.167 2.66669C9.61471 2.66669 9.16699 3.1144 9.16699 3.66669V6.33335C9.16699 6.88564 9.61471 7.33335 10.167 7.33335H12.8337C13.3859 7.33335 13.8337 6.88564 13.8337 6.33335V3.66669C13.8337 3.1144 13.3859 2.66669 12.8337 2.66669H10.167ZM9.16699 9.66669C9.16699 9.1144 9.61471 8.66669 10.167 8.66669H12.8337C13.3859 8.66669 13.8337 9.1144 13.8337 9.66669V12.3334C13.8337 12.8856 13.3859 13.3334 12.8337 13.3334H10.167C9.61471 13.3334 9.16699 12.8856 9.16699 12.3334V9.66669ZM4.16699 8.66669C3.61471 8.66669 3.16699 9.1144 3.16699 9.66669V12.3334C3.16699 12.8856 3.61471 13.3334 4.16699 13.3334H6.83366C7.38594 13.3334 7.83366 12.8856 7.83366 12.3334V9.66669C7.83366 9.1144 7.38594 8.66669 6.83366 8.66669H4.16699Z"
                                                fill="currentColor"></path>
                                        </svg></svg></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coin-data">
                <table class="coin-data-table m-auto text-[14px] w-full" style="transform: translateZ(0px);">
                    <thead class="relative z-120">
                        <tr>
                            <th class="sticky top-0 w-[36px]" style="text-align: left;"></th>
                            <th class="text-left sticky top-0 w-[46.09px] ">
                                <div class="flex flex-row items-center h-[23px] justify-start">
                                    <div class="cursor-pointer flex flex-row items-center">
                                        <p class="white-space-nowrap leading-[1.5] m-0 text-[#171924] text-[12px]">#</p>
                                        <span class="inline-block w-[16px] h-[23px]"><i
                                                class="fa-solid fa-caret-up ml-[2px] mr-[2px]"></i></span>
                                    </div>
                                </div>
                            </th>
                            <th class="sticky top-0 whitespace-normal w-[222.75px]" style="text-align: left;">
                                <div class="flex flex-row items-center h-[23px] justify-start">
                                    <div class="cursor-pointer flex flex-row items-center">
                                        <p class="white-space-nowrap leading-[1.5] m-0 text-[#171924] text-[12px]">Name
                                        </p>
                                        <span class="inline-block w-[16px] h-[23px]"></span>
                                    </div>
                                </div>
                            </th>
                            <th class="sticky top-0 w-[112px]">
                                <div class="flex flex-row items-center h-[23px] justify-end">
                                    <div class="cursor-pointer flex flex-row items-center">
                                        <span class="inline-block w-[16px] h-[23px]"></span>
                                        <p class="white-space-nowrap leading-[1.5] m-0 text-[#171924] text-[12px]">
                                            Price
                                        </p>
                                    </div>
                                </div>
                            </th>
                            <th class="sticky top-0" style="text-align: right;">
                                <div class="flex flex-row items-center h-[23px] justify-end">
                                    <div class="cursor-pointer flex flex-row items-center">
                                        <span class="inline-block w-[16px] h-[23px]"></span>
                                        <p class="white-space-nowrap leading-[1.5] m-0 text-[#171924] text-[12px]">
                                            24h %
                                        </p>
                                    </div>
                                </div>
                            </th>
                            <th class="sticky top-0 w-[84.75px]" style="text-align: right;">
                                <div class="flex flex-row items-center h-[23px] justify-end">
                                    <div class="cursor-pointer flex flex-row items-center">
                                        <span class="inline-block w-[16px] h-[23px]"></span>
                                        <p class="white-space-nowrap leading-[1.5] m-0 text-[#171924] text-[12px]">
                                            7d %
                                        </p>
                                    </div>
                                </div>
                            </th>
                            <th class="sticky top-0 w-[163.93px]" style="text-align: right;">
                                <div class="flex flex-row items-center h-[23px] justify-end">
                                    <div class="cursor-pointer flex flex-row items-center">
                                        <span class="inline-block w-[16px] h-[23px]"></span>
                                        <p class="white-space-nowrap leading-[1.5] m-0 text-[#171924] text-[12px]">
                                            Market Cap
                                        </p>
                                    </div>
                                    <div class="ml-[3px] align-middle leading-0 block"><svg class="m-0 text-[#A6B0C3]"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="16"
                                            width="16" viewBox="0 0 24 24" color="neutral4" class="sc-16r8icm-0 kLSxec">
                                            <path
                                                d="M12 2C6.48583 2 2 6.48583 2 12C2 17.5142 6.48583 22 12 22C17.5142 22 22 17.5142 22 12C22 6.48583 17.5142 2 12 2ZM14.215 17.2367C13.6642 17.4533 11.755 18.365 10.655 17.3958C10.3267 17.1075 10.1633 16.7417 10.1633 16.2975C10.1633 15.4658 10.4367 14.7408 10.9292 13C11.0158 12.6708 11.1217 12.2442 11.1217 11.9058C11.1217 11.3217 10.9 11.1667 10.2992 11.1667C10.0058 11.1667 9.68083 11.2708 9.38667 11.3808L9.54917 10.715C10.205 10.4483 11.0283 10.1233 11.7333 10.1233C12.7908 10.1233 13.5692 10.6508 13.5692 11.6542C13.5692 11.9433 13.5192 12.45 13.4142 12.8L12.8058 14.9517C12.68 15.3867 12.4525 16.3458 12.805 16.63C13.1517 16.9108 13.9725 16.7617 14.3775 16.5708L14.215 17.2367ZM13.21 8.66667C12.52 8.66667 11.96 8.10667 11.96 7.41667C11.96 6.72667 12.52 6.16667 13.21 6.16667C13.9 6.16667 14.46 6.72667 14.46 7.41667C14.46 8.10667 13.9 8.66667 13.21 8.66667Z">
                                            </path>
                                        </svg></div>
                                </div>
                            </th>
                            <th class="sticky top-0 w-[180.16px]" style="text-align: right;">
                                <div class="flex flex-row items-center h-[23px] justify-end">
                                    <div class="cursor-pointer flex flex-row items-center">
                                        <span class="inline-block w-[16px] h-[23px]"></span>
                                        <p class="white-space-nowrap leading-[1.5] m-0 text-[#171924] text-[12px]">
                                            Volume(24h)
                                        </p>
                                    </div>
                                    <div class="ml-[3px] align-middle leading-0 block"><svg class="m-0 text-[#A6B0C3]"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="16"
                                            width="16" viewBox="0 0 24 24" color="neutral4" class="sc-16r8icm-0 kLSxec">
                                            <path
                                                d="M12 2C6.48583 2 2 6.48583 2 12C2 17.5142 6.48583 22 12 22C17.5142 22 22 17.5142 22 12C22 6.48583 17.5142 2 12 2ZM14.215 17.2367C13.6642 17.4533 11.755 18.365 10.655 17.3958C10.3267 17.1075 10.1633 16.7417 10.1633 16.2975C10.1633 15.4658 10.4367 14.7408 10.9292 13C11.0158 12.6708 11.1217 12.2442 11.1217 11.9058C11.1217 11.3217 10.9 11.1667 10.2992 11.1667C10.0058 11.1667 9.68083 11.2708 9.38667 11.3808L9.54917 10.715C10.205 10.4483 11.0283 10.1233 11.7333 10.1233C12.7908 10.1233 13.5692 10.6508 13.5692 11.6542C13.5692 11.9433 13.5192 12.45 13.4142 12.8L12.8058 14.9517C12.68 15.3867 12.4525 16.3458 12.805 16.63C13.1517 16.9108 13.9725 16.7617 14.3775 16.5708L14.215 17.2367ZM13.21 8.66667C12.52 8.66667 11.96 8.10667 11.96 7.41667C11.96 6.72667 12.52 6.16667 13.21 6.16667C13.9 6.16667 14.46 6.72667 14.46 7.41667C14.46 8.10667 13.9 8.66667 13.21 8.66667Z">
                                            </path>
                                        </svg></div>
                                </div>
                            </th>
                            <th class="sticky top-0 w-[200.91px]" style="text-align: right;">
                                <div class="flex flex-row items-center h-[23px] justify-end">
                                    <div class="cursor-pointer flex flex-row items-center">
                                        <span class="inline-block w-[16px] h-[23px]"></span>
                                        <p class="white-space-nowrap leading-[1.5] m-0 text-[#171924] text-[12px]">
                                            Circulating Supply
                                        </p>
                                    </div>
                                    <div class="ml-[3px] align-middle leading-0 block"><svg class="m-0 text-[#A6B0C3]"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="16"
                                            width="16" viewBox="0 0 24 24" color="neutral4" class="sc-16r8icm-0 kLSxec">
                                            <path
                                                d="M12 2C6.48583 2 2 6.48583 2 12C2 17.5142 6.48583 22 12 22C17.5142 22 22 17.5142 22 12C22 6.48583 17.5142 2 12 2ZM14.215 17.2367C13.6642 17.4533 11.755 18.365 10.655 17.3958C10.3267 17.1075 10.1633 16.7417 10.1633 16.2975C10.1633 15.4658 10.4367 14.7408 10.9292 13C11.0158 12.6708 11.1217 12.2442 11.1217 11.9058C11.1217 11.3217 10.9 11.1667 10.2992 11.1667C10.0058 11.1667 9.68083 11.2708 9.38667 11.3808L9.54917 10.715C10.205 10.4483 11.0283 10.1233 11.7333 10.1233C12.7908 10.1233 13.5692 10.6508 13.5692 11.6542C13.5692 11.9433 13.5192 12.45 13.4142 12.8L12.8058 14.9517C12.68 15.3867 12.4525 16.3458 12.805 16.63C13.1517 16.9108 13.9725 16.7617 14.3775 16.5708L14.215 17.2367ZM13.21 8.66667C12.52 8.66667 11.96 8.10667 11.96 7.41667C11.96 6.72667 12.52 6.16667 13.21 6.16667C13.9 6.16667 14.46 6.72667 14.46 7.41667C14.46 8.10667 13.9 8.66667 13.21 8.66667Z">
                                            </path>
                                        </svg></div>
                                </div>
                            </th>
                            <th class="sticky top-0 w-[184px]" style="text-align: right;">
                                <p class="text-[12px] leading-[1.5] m-0 text-[#171924]">Last 7 Days</p>
                            </th>
                            <th class="sticky top-0 w-[60.04px]"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="sticky top-0 w-[36px]" style="text-align: left;"><span class="text-left"><i
                                        class="fa-regular fa-star"></i></span>
                            </td>
                            <td class="text-left sticky top-0 w-[46.09px] ">
                                <p class="leading-[1.5] m-0 text-[#58667E] text-[12px]">1</p>
                            </td>
                            <td class="sticky top-0 whitespace-normal w-[222.75px]" style="text-align: left;">
                                <div class="flex items-center">
                                    <a href="#">
                                        <div class="flex flex-row m-0 items-center">
                                            <img class="h-[24px] w-[24px] rounded-[12px]" src="./images/1.png" alt="">
                                            <div class="flex flex-row items-center m-0">
                                                <p
                                                    class="m-0 ml-[5px] leading-[24px] text-[14px] text-[#201924] font-[600]">
                                                    Bitcoin
                                                </p>
                                                <div class="flex flex-row items-center">
                                                    <div
                                                        class="hidden rounded-[4px] px-[6px] text-[12px] bg-[#EFF2F5] ml-[12px] text-[#58667E]">
                                                        1
                                                    </div>
                                                    <p
                                                        class="md:text-[14px] ml-[6px] text-[12px] md:ml-[5px] md:leading-[24px] text-[#808A9D] font-bold">
                                                        BTC
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                            <td
                                class="sticky top-0 w-[112px] min-w-[8em] text-right font-[500] whitespace-nowrap text-[14px]">
                                <div class="text-black "><a href="#"
                                        class="decoration-none cursor-pointer text-black"><span
                                            class="text-inherit">$38,075.01</span></a>
                                </div>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <span class="white-space-norwap rounded-[8px] p-0 text-[#ea3943]"><i
                                        class="fa-solid fa-caret-down mr-px ml-px"></i>1.52%</span>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <span class="white-space-norwap rounded-[8px] p-0 text-[#ea3943]"><i
                                        class="fa-solid fa-caret-down mr-px ml-px"></i>4.35%</span>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <p class="whitespace-nowrap leading-[1.5] m-0 text-[#201924] text-[14px]"><span
                                        class="md:hidden">$722.58B</span><span
                                        class="whitespace-nowrap leading-[1.5] text-[#201924] text-[14px]">$722,575,972,727</span>
                                </p>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <div class="m-0 flex flex-col items-end font-[500]">
                                    <a href="#" class="decoration-none ">
                                        <p class="leading-[1.5] m-0 text-[#201924] text-[14px]">$27,007,155,513</p>
                                    </a>
                                    <div class="" data-nosnippet="true">
                                        <p class="leading-[1.5] m-0 text-[#58667E] text-[12px]">711,166 BTC</p>
                                    </div>
                                </div>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <div class="cursor-pointer m-0 flex flex-col justify-center items-end">
                                    <div class="mt-0 mb-[4px] mx-0 flex flex-row items-center">
                                        <p class="leading-[1.5] m-0 text-[#171924] text-[14px] font-[500]">19,027,225
                                            BTC</p>
                                    </div>
                                    <div class="h-[6px] rounded-[3px] bg-[#EFF2F5] w-[160px]">
                                        <div class="h-[6px] rounded-[3px] bg-[#CFD6E4] w-[145px] top-0 left-0"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <a href="#"><img class="w-[164px] h-[48px] text-center box-content pt-[2px] pb-[3px]"
                                        style="filter: hue-rotate(300deg) saturate(210%) brightness(0.7) contrast(170%);"
                                        src="./images/1.svg" alt=""></a>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]">
                                <div class="m-0 box-border"><button
                                        class="bg-[#F8FAFD] text-black decoration-none p-0 w-[40x] items-center border-none inline-flex cursor-pointer justify-center outline-none font-[600] h-[40px] text-[14px] leading-[24px]">
                                        <!-- icon --><i class="fa-solid fa-circle-ellipsis-vertical"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="sticky top-0 w-[36px]" style="text-align: left;"><span class="text-left"><i
                                        class="fa-regular fa-star"></i></span>
                            </td>
                            <td class="text-left sticky top-0 w-[46.09px] ">
                                <p class="leading-[1.5] m-0 text-[#58667E] text-[12px]">1</p>
                            </td>
                            <td class="sticky top-0 whitespace-normal w-[222.75px]" style="text-align: left;">
                                <div class="flex items-center">
                                    <a href="#">
                                        <div class="flex flex-row m-0 items-center">
                                            <img class="h-[24px] w-[24px] rounded-[12px]" src="./images/1.png" alt="">
                                            <div class="flex flex-row items-center m-0">
                                                <p
                                                    class="m-0 ml-[5px] leading-[24px] text-[14px] text-[#201924] font-[600]">
                                                    Bitcoin
                                                </p>
                                                <div class="flex flex-row items-center">
                                                    <div
                                                        class="hidden rounded-[4px] px-[6px] text-[12px] bg-[#EFF2F5] ml-[12px] text-[#58667E]">
                                                        1
                                                    </div>
                                                    <p
                                                        class="md:text-[14px] ml-[6px] text-[12px] md:ml-[5px] md:leading-[24px] text-[#808A9D] font-bold">
                                                        BTC
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                            <td
                                class="sticky top-0 w-[112px] min-w-[8em] text-right font-[500] whitespace-nowrap text-[14px]">
                                <div class="text-black "><a href="#"
                                        class="decoration-none cursor-pointer text-black"><span
                                            class="text-inherit">$38,075.01</span></a>
                                </div>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <span class="white-space-norwap rounded-[8px] p-0 text-[#ea3943]"><i
                                        class="fa-solid fa-caret-down mr-px ml-px"></i>1.52%</span>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <span class="white-space-norwap rounded-[8px] p-0 text-[#ea3943]"><i
                                        class="fa-solid fa-caret-down mr-px ml-px"></i>4.35%</span>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <p class="whitespace-nowrap leading-[1.5] m-0 text-[#201924] text-[14px]"><span
                                        class="md:hidden">$722.58B</span><span
                                        class="whitespace-nowrap leading-[1.5] text-[#201924] text-[14px]">$722,575,972,727</span>
                                </p>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <div class="m-0 flex flex-col items-end font-[500]">
                                    <a href="#" class="decoration-none ">
                                        <p class="leading-[1.5] m-0 text-[#201924] text-[14px]">$27,007,155,513</p>
                                    </a>
                                    <div class="" data-nosnippet="true">
                                        <p class="leading-[1.5] m-0 text-[#58667E] text-[12px]">711,166 BTC</p>
                                    </div>
                                </div>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <div class="cursor-pointer m-0 flex flex-col justify-center items-end">
                                    <div class="mt-0 mb-[4px] mx-0 flex flex-row items-center">
                                        <p class="leading-[1.5] m-0 text-[#171924] text-[14px] font-[500]">19,027,225
                                            BTC</p>
                                    </div>
                                    <div class="h-[6px] rounded-[3px] bg-[#EFF2F5] w-[160px]">
                                        <div class="h-[6px] rounded-[3px] bg-[#CFD6E4] w-[145px] top-0 left-0"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <a href="#"><img class="w-[164px] h-[48px] text-center box-content pt-[2px] pb-[3px]"
                                        style="filter: hue-rotate(300deg) saturate(210%) brightness(0.7) contrast(170%);"
                                        src="./images/1.svg" alt=""></a>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]">
                                <div class="m-0 box-border"><button
                                        class="bg-[#F8FAFD] text-black decoration-none p-0 w-[40x] items-center border-none inline-flex cursor-pointer justify-center outline-none font-[600] h-[40px] text-[14px] leading-[24px]">
                                        <!-- icon --><i class="fa-solid fa-circle-ellipsis-vertical"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="sticky top-0 w-[36px]" style="text-align: left;"><span class="text-left"><i
                                        class="fa-regular fa-star"></i></span>
                            </td>
                            <td class="text-left sticky top-0 w-[46.09px] ">
                                <p class="leading-[1.5] m-0 text-[#58667E] text-[12px]">1</p>
                            </td>
                            <td class="sticky top-0 whitespace-normal w-[222.75px]" style="text-align: left;">
                                <div class="flex items-center">
                                    <a href="#">
                                        <div class="flex flex-row m-0 items-center">
                                            <img class="h-[24px] w-[24px] rounded-[12px]" src="./images/1.png" alt="">
                                            <div class="flex flex-row items-center m-0">
                                                <p
                                                    class="m-0 ml-[5px] leading-[24px] text-[14px] text-[#201924] font-[600]">
                                                    Bitcoin
                                                </p>
                                                <div class="flex flex-row items-center">
                                                    <div
                                                        class="hidden rounded-[4px] px-[6px] text-[12px] bg-[#EFF2F5] ml-[12px] text-[#58667E]">
                                                        1
                                                    </div>
                                                    <p
                                                        class="md:text-[14px] ml-[6px] text-[12px] md:ml-[5px] md:leading-[24px] text-[#808A9D] font-bold">
                                                        BTC
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                            <td
                                class="sticky top-0 w-[112px] min-w-[8em] text-right font-[500] whitespace-nowrap text-[14px]">
                                <div class="text-black "><a href="#"
                                        class="decoration-none cursor-pointer text-black"><span
                                            class="text-inherit">$38,075.01</span></a>
                                </div>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <span class="white-space-norwap rounded-[8px] p-0 text-[#ea3943]"><i
                                        class="fa-solid fa-caret-down mr-px ml-px"></i>1.52%</span>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <span class="white-space-norwap rounded-[8px] p-0 text-[#ea3943]"><i
                                        class="fa-solid fa-caret-down mr-px ml-px"></i>4.35%</span>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <p class="whitespace-nowrap leading-[1.5] m-0 text-[#201924] text-[14px]"><span
                                        class="md:hidden">$722.58B</span><span
                                        class="whitespace-nowrap leading-[1.5] text-[#201924] text-[14px]">$722,575,972,727</span>
                                </p>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <div class="m-0 flex flex-col items-end font-[500]">
                                    <a href="#" class="decoration-none ">
                                        <p class="leading-[1.5] m-0 text-[#201924] text-[14px]">$27,007,155,513</p>
                                    </a>
                                    <div class="" data-nosnippet="true">
                                        <p class="leading-[1.5] m-0 text-[#58667E] text-[12px]">711,166 BTC</p>
                                    </div>
                                </div>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <div class="cursor-pointer m-0 flex flex-col justify-center items-end">
                                    <div class="mt-0 mb-[4px] mx-0 flex flex-row items-center">
                                        <p class="leading-[1.5] m-0 text-[#171924] text-[14px] font-[500]">19,027,225
                                            BTC</p>
                                    </div>
                                    <div class="h-[6px] rounded-[3px] bg-[#EFF2F5] w-[160px]">
                                        <div class="h-[6px] rounded-[3px] bg-[#CFD6E4] w-[145px] top-0 left-0"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]" style="text-align: right;">
                                <a href="#"><img class="w-[164px] h-[48px] text-center box-content pt-[2px] pb-[3px]"
                                        style="filter: hue-rotate(300deg) saturate(210%) brightness(0.7) contrast(170%);"
                                        src="./images/1.svg" alt=""></a>
                            </td>
                            <td class="sticky top-0 text-[14px] font-[500]">
                                <div class="m-0 box-border"><button
                                        class="bg-[#F8FAFD] text-black decoration-none p-0 w-[40x] items-center border-none inline-flex cursor-pointer justify-center outline-none font-[600] h-[40px] text-[14px] leading-[24px]">
                                        <!-- icon --><i class="fa-solid fa-circle-ellipsis-vertical"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div
                class="coin-data-footer box-border flex flex-row items-center justify-between mt-[16px] mb-[40px] mx-0">
                <p class="w-0 whitespace-nowrap leading-[1.5] m-0 text-[#171924] text-[14px]">Showing 1 - 20 out of
                    10081</p>
                <div class="block">
                    <div class="">
                        <ul class="pagination list-none m-0 p-0">
                            <li
                                class="previous disabled mr-[8px] inline-block min-w-[28px] h-[28px] text-[#171924] leading-[28px] text-center align-middle list-none rounded-[2px] cursor-pointer transition-all duration-300 ease-in-out delay-0">
                                <a href="#" class="text-inherit decoration-none cursor-pointer"><svg
                                        class="box-border m-0 h-[14px] w-[14px]" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" height="14" width="14" viewBox="0 0 24 24"
                                        class="sc-16r8icm-0 dWGZqy">
                                        <path d="M15 6L9 12L15 18" stroke="currentColor" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                    </svg></a>
                            </li>
                            <li class="page active">
                                <a href="#" role="button" tabindex="0" class="text-white"
                                    aria-label="Page 1 is your current page" aria-current="page">1</a>
                            </li>
                            <li class="page ">
                                <a href="#" role="button" tabindex="0" class="" aria-label="Page 2">2</a>
                            </li>
                            <li class="page ">
                                <a href="#" role="button" tabindex="0" class="" aria-label="Page 3">3</a>
                            </li>
                            <li class="page ">
                                <a href="#" role="button" tabindex="0" class="" aria-label="Page 4">4</a>
                            </li>
                            <li class="page ">
                                <a href="#" role="button" tabindex="0" class="" aria-label="Page 5">5</a>
                            </li>
                            <li class="page ">
                                <a href="#" role="button" tabindex="0" class="" aria-label="Page 6">6</a>
                            </li>
                            <li class="break">
                                <a href="#" role="button" tabindex="0">...</a>
                            </li>
                            <li class=" page ">
                                <a href=" #" role="button" tabindex="0" class="" aria-label="Page 505">505</a>
                            </li>
                            <li class="next">
                                <a class="chevron decoration-none" href="/?page=2" tabindex="0" role="button"
                                    aria-disabled="false" aria-label="Next page"><svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" height="14" width="14" viewBox="0 0 24 24"
                                        class="sc-16r8icm-0 dWGZqy">
                                        <path d="M9 6L15 12L9 18" stroke="currentColor" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="box-border m-0 flex flex-row items-center">
                    <p class="leading-[1.5] my-0 mr-[6px] text-[#58667E] text-[14px]">Show rows</p>
                    <div
                        class="box-border m-0 inline-flex flex-row items-center bg-[#EFF2F5] rounded-[8px] outline-none font-[600] cursor-pointer text-black py-[5px] px-[8px] text-[12px] leading-[22px]">
                        20<svg class="box-border m-0 w-[14px] h-[14px]" xmlns="http://www.w3.org/2000/svg" fill="none"
                            height="14" width="14" viewBox="0 0 24 24" class="sc-16r8icm-0 dWGZqy">
                            <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="block">
                <div
                    class="text-title py-[16px] text-[#58667E] text-[12px] leading-[18px] border-b-[1px] border-[#EFF2F5] mb-[40px]">
                    <div class="inline-block">Find out how we work by clicking here.</div>
                    <span id="drop-anchor-4-text-title"
                        class="pl-[5px] font-[500] text-[#58667E] underline cursor-pointer">Read More</span>
                </div>
                <div class="text-content hidden py-[28px] px-0">
                    <div class="seo-text-translations pb-[24px]">
                        <h2>Today’s Cryptocurrency Prices, Charts and Data</h2>
                        <p> Welcome to CoinMarketCap.com! This site was founded in May 2013 by Brandon Chez to provide
                            up-to-date cryptocurrency prices, charts and data about the emerging cryptocurrency markets.
                            Since then, the world of blockchain and cryptocurrency has grown exponentially and we are
                            very proud to have grown with it. We take our data very seriously and we do not change our
                            data to fit any narrative: we stand for accurately, timely and unbiased information. </p>
                        <h2>All Your Crypto Market Data Needs in One Place</h2>
                        <p> Here at CoinMarketCap, we work very hard to ensure that all the relevant and up-to-date
                            information about cryptocurrencies, coins and tokens can be located in one easily
                            discoverable place. From the very first day, the goal was for the site to be the number one
                            location online for crypto market data, and we work hard to empower our users with our
                            unbiased and accurate information. </p>
                        <h3>We Provide Live and Historic Crypto Charts for Free</h3>
                        <p> Each of our coin data pages has a graph that shows both the current and historic price
                            information for the coin or token. Normally, the graph starts at the launch of the asset,
                            but it is possible to select specific to and from dates to customize the chart to your own
                            needs. These charts and their information are free to visitors of our website. </p>
                        <h3>How Do We Calculate Our Cryptocurrency Prices?</h3>
                        <p> We receive updated cryptocurrency prices directly from many exchanges based on their pairs.
                            We then convert the number to USD. A full explanation can be found <a target="‘_blanket’"
                                href="https://support.coinmarketcap.com/hc/en-us/articles/360043395752-Price-Market-Pair-Cryptoasset-">
                                here</a>. </p>
                        <p> Related Links <br> New to crypto? <a href="https://coinmarketcap.com/how-to-buy-bitcoin/"
                                target="‘_blanket’"> Learn how to buy bitcoin today</a>. <br> Ready to learn more? Visit
                            our <a href="https://coinmarketcap.com/alexandria/glossary" target="‘_blank’"> crypto
                                glossary </a> and <a href="https://coinmarketcap.com/alexandria/"
                                target="_blank">Learning hub</a>. <br> Want to look up a transaction? <a target="_blank"
                                href="https://blockchain.coinmarketcap.com/"> Visit our blockchain explorer.</a> </p>
                        <h3> How Do We Calculate Our Crypto Valuations?</h3>
                        <p> We calculate our valuations based on the total circulating supply of an asset multiplied by
                            the currency reference price. The topic is explained in more detail <a target="_blank"
                                href="https://support.coinmarketcap.com/hc/en-us/articles/360043836811-Market-Capitalization-Cryptoasset-Aggregate-">
                                here</a>. </p>
                        <h3>How Do We Calculate the Cryptocurrency Market Cap?</h3>
                        <p> We calculate the total cryptocurrency market capitalization as the sum of all
                            cryptocurrencies listed on the site. </p>
                        <h2>Does CoinMarketCap.com List All Cryptocurrencies?</h2>
                        <p> No, we do not list all cryptocurrencies at CoinMarketCap. As a company and team, we are very
                            aware that not all coins and projects have good intentions. While we cannot guarantee to
                            exclude them all, we have a vetting process that each coin goes through before it is listed
                            on the site. If we suspect that a coin or project is a scam, it does not get listed. </p>
                        <h3>How Big Is the Global Coin Market?</h3>
                        <p> At the time of writing, we estimate that there are around 8,000 coins, tokens and projects
                            in the global coin market. As mentioned above, we have a <a
                                href="https://support.coinmarketcap.com/hc/en-us/articles/360043659351-Listings-Criteria"
                                target="_blank">due diligence process</a> that we apply to new coins before they are
                            listed. This process controls how many of the cryptocurrencies from the global market are
                            represented on our site. </p>
                        <h3> What Is an Altcoin?</h3>
                        <p> The very first cryptocurrency was <a href="https://coinmarketcap.com/currencies/bitcoin/"
                                target="_blank"> Bitcoin</a>. Since it is open source, it is possible for other people
                            to use the majority of the code, make a few changes and then launch their own separate
                            currency. Many people have done exactly this. Some of these coins are very similar to
                            Bitcoin, with just one or two amended features (such as <a
                                href="https://coinmarketcap.com/currencies/litecoin/" target="_blank">Litecoin</a>),
                            while others are very different, with varying models of security, issuance and governance.
                            However, they all share the same moniker — every coin issued after Bitcoin is considered to
                            be an altcoin. </p>
                        <h3> What Is an ICO?</h3>
                        <p> ICO stands for initial coin offering. Many of the smaller projects in the crypto space — and
                            a few of the largest ones — raised money from private investors around the world in the
                            crypto equivalent of a crowdfunding campaign. Investors would send funds — usually in the
                            form of Bitcoin — to the project and receive coin or tokens in return.<br> Most ICOs
                            happened in 2017 and early 2018 and used <a
                                href="https://coinmarketcap.com/currencies/ethereum/" target="_blank">Ethereum</a> as a
                            platform of operation via the ERC-20 standard. In 2018, the United States Securities and
                            Exchange Commission (SEC) clarified their rules relating to fundraising for assets, which
                            made it much harder for new cryptocurrency projects to issue their own tokens in this way.
                            Since the appearance of the SEC guidance and the organization’s heightened interest in
                            regulating ICOs for U.S. citizens, the number of ICOs has been reduced substantially. </p>
                        <h3> What Is a Stablecoin?</h3>
                        <p> Price volatility has long been one of the features of the cryptocurrency market. When asset
                            prices move quickly in either direction and the market itself is relatively thin, it can
                            sometimes be difficult to conduct transactions as might be needed. To overcome this problem,
                            a new type of cryptocurrency tied in value to existing currencies — ranging from the U.S.
                            dollar, other fiats or even other cryptocurrencies — arose. These new cryptocurrency are
                            known as stablecoins, and they can be used for a multitude of purposes due to their
                            stability. </p>
                        <h3 id="what-are-in-game-tokens-">What Are In-game Tokens?</h3>
                        <p><a
                                href="https://coinmarketcap.com/alexandria/glossary/play2earn-play-to-earn">Play-to-earn</a>
                            (P2E) games, also known as <a
                                href="https://coinmarketcap.com/alexandria/glossary/gamefi">GameFi</a>, has emerged as
                            an extremely popular category in the crypto space. It combines <a
                                href="https://coinmarketcap.com/alexandria/glossary/non-fungible-token">non-fungible
                                tokens</a> (NFT), in-game crypto tokens, <a
                                href="https://coinmarketcap.com/alexandria/glossary/defi">decentralized finance</a>
                            (DeFi) elements and sometimes even metaverse applications. Players have an opportunity to
                            generate revenue by giving their time (and sometimes capital) and playing these games.</p>
                        <p>One of the biggest winners is <a
                                href="https://coinmarketcap.com/currencies/axie-infinity/">Axie Infinity</a> — a
                            Pokémon-inspired game where players collect Axies (NFTs of digital pets), breed and battle
                            them against other players to earn Smooth Love Potion (SLP) — the in-game reward token. This
                            game was extremely popular in developing countries like The Philippines, due to the decent
                            income they can earn. Players in the Philippines can check the price of <a
                                href="https://coinmarketcap.com/currencies/smooth-love-potion/slp/php/">SLP to PHP
                                today</a> directly on CoinMarketCap.</p>
                        <h2>Which Is the Best Cryptocurrency to Invest in? </h2>
                        <p> CoinMarketCap does not offer financial or investment advice about which cryptocurrency,
                            token or asset does or does not make a good investment, nor do we offer advice about the
                            timing of purchases or sales. We are strictly a data company. <br> Please remember that the
                            prices, yields and values of financial assets change. This means that any capital you may
                            invest is at risk. We recommend seeking the advice of a professional investment advisor for
                            guidance related to your personal circumstances. </p>
                        <h3>If You Are Investing in Cryptocurrency — CoinMarketCap.com Is for You</h3>
                        <p> The data at CoinMarketCap updates throughout the day, which means that it is possible to
                            check in on the value of your investments and assets at any time and from anywhere in the
                            world. We look forward to seeing you regularly! </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="register-for-email-news" class="m-0"></div>
        <footer></footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./library/owl-slider/owl.carousel.min.js"></script>
    <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        center: true,
        margin: 24,
        responsiveClass: true,
        dot: false,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 4,
                nav: true,
            }
        }
    })
    /* code */
    $(document).ready(function() {
        $(".category-button").click(function() {
            $(".category-button-clicked").addClass("category-button-not-clicked").removeClass(
                "category-button-clicked");
            $(this).addClass("category-button-clicked");
        });
        $("#drop-anchor-4-text-title").click(function() {

            if ($(".text-content").hasClass("hidden")) {
                $(".text-content").removeClass("hidden");
                $("#drop-anchor-4-text-title").text("Read Less");
            } else if ($(".text-content").not("hidden")) {
                $(".text-content").addClass("hidden");
                $("#drop-anchor-4-text-title").text("Read More");
            }
        });
    });
    </script>
</body>

</html>