<div class="flex flex-col items-stretch gap-[10px]">
    @if(isset($company) and !empty($company))
        <h4 class="font-bold text-[25px] leading-[1.2] text-ah-blue">{{ $company }}</h4>
    @endif
    @if(isset($name) and !empty($name))
        <p class="flex items-center m-0 gap-[10px] font-medium text-[20px] leading-[1.2] text-ah-medium-grey">
            <span class="flex-initial basis-[24px] mt-[0.25em]">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.17317 1.42771C7.38642 0.925162 8.68678 0.666504 10 0.666504C11.3132 0.666504 12.6136 0.925162 13.8268 1.42771C15.0401 1.93026 16.1425 2.66685 17.0711 3.59544C17.9997 4.52402 18.7362 5.62641 19.2388 6.83967C19.7413 8.05293 20 9.35329 20 10.6665C20 11.9797 19.7413 13.2801 19.2388 14.4933C18.7362 15.7066 17.9997 16.809 17.0711 17.7376C16.896 17.9127 16.7147 18.081 16.5276 18.2422C16.4981 18.2706 16.4667 18.2973 16.4336 18.3221C15.652 18.9789 14.7732 19.5133 13.8268 19.9053C12.6136 20.4078 11.3132 20.6665 10 20.6665C8.68678 20.6665 7.38642 20.4078 6.17317 19.9053C4.95991 19.4028 3.85752 18.6662 2.92893 17.7376C2.00035 16.809 1.26375 15.7066 0.761205 14.4933C0.258658 13.2801 0 11.9797 0 10.6665C0 9.35328 0.258658 8.05293 0.761205 6.83967C1.26375 5.62641 2.00035 4.52402 2.92893 3.59544C3.85752 2.66685 4.95991 1.93026 6.17317 1.42771ZM16.1151 15.8245C16.6449 15.1965 17.0756 14.4895 17.391 13.728C17.7931 12.7574 18 11.7171 18 10.6665C18 9.61593 17.7931 8.57564 17.391 7.60504C16.989 6.63443 16.3997 5.75252 15.6569 5.00965C14.914 4.26678 14.0321 3.67751 13.0615 3.27547C12.0909 2.87343 11.0506 2.6665 10 2.6665C8.94942 2.6665 7.90914 2.87343 6.93853 3.27547C5.96793 3.67751 5.08601 4.26678 4.34315 5.00965C3.60028 5.75252 3.011 6.63443 2.60896 7.60504C2.20693 8.57564 2 9.61593 2 10.6665C2 11.7171 2.20693 12.7574 2.60896 13.728C2.92443 14.4896 3.35518 15.1966 3.88497 15.8246C4.19343 15.3781 4.57449 14.9819 5.0156 14.654C5.87837 14.0125 6.92491 13.6663 8 13.6665M5.38216 17.1992C5.58737 16.8332 5.8683 16.5122 6.20889 16.259C6.7266 15.8741 7.35459 15.6663 7.9997 15.6665H12C12.6459 15.6663 13.2751 15.8746 13.7931 16.2603C14.1329 16.5133 14.4132 16.8338 14.618 17.1991C14.1338 17.5413 13.6119 17.8295 13.0615 18.0575C12.0909 18.4596 11.0506 18.6665 10 18.6665C8.94942 18.6665 7.90914 18.4596 6.93853 18.0575C6.38817 17.8296 5.86632 17.5414 5.38216 17.1992ZM16.1151 15.8245C15.8074 15.3791 15.4274 14.9837 14.9876 14.6562C14.1243 14.0133 13.0765 13.6662 12 13.6665C11.9999 13.6665 12.0001 13.6665 12 13.6665H8M7.17157 5.83808C7.92172 5.08793 8.93913 4.6665 10 4.6665C11.0609 4.6665 12.0783 5.08793 12.8284 5.83808C13.5786 6.58822 14 7.60564 14 8.6665C14 9.72737 13.5786 10.7448 12.8284 11.4949C12.0783 12.2451 11.0609 12.6665 10 12.6665C8.93913 12.6665 7.92172 12.2451 7.17157 11.4949C6.42143 10.7448 6 9.72737 6 8.6665C6 7.60564 6.42143 6.58822 7.17157 5.83808ZM10 6.6665C9.46957 6.6665 8.96086 6.87722 8.58579 7.25229C8.21071 7.62736 8 8.13607 8 8.6665C8 9.19694 8.21071 9.70565 8.58579 10.0807C8.96086 10.4558 9.46957 10.6665 10 10.6665C10.5304 10.6665 11.0391 10.4558 11.4142 10.0807C11.7893 9.70565 12 9.19694 12 8.6665C12 8.13607 11.7893 7.62736 11.4142 7.25229C11.0391 6.87722 10.5304 6.6665 10 6.6665Z" fill="currentColor"/>
                </svg>
            </span>
            <span class="flex-auto">{{ $name }}</span>
        </p>
    @endif
    @if(isset($phone) and !empty($phone))
        <p class="flex items-center m-0 gap-[10px] font-normal text-[16px] leading-[1.2] text-ah-medium-grey">
            <span class="flex-initial basis-[24px] mt-[0.25em]">
                <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 2.6665C2.73478 2.6665 2.48043 2.77186 2.29289 2.9594C2.11141 3.14088 2.00688 3.38495 2.00033 3.64087C2.23032 7.2848 3.78159 10.7202 6.36394 13.3026C8.94628 15.8849 12.3817 17.4362 16.0256 17.6662C16.2816 17.6596 16.5256 17.5551 16.7071 17.3736C16.8946 17.1861 17 16.9317 17 16.6665V13.3435L13.4193 11.9113L12.3575 13.681C12.0897 14.1273 11.5244 14.2936 11.0577 14.0634C8.68874 12.895 6.77146 10.9778 5.60314 8.60882C5.37294 8.14206 5.53924 7.57677 5.9855 7.30901L7.75523 6.24717L6.32297 2.6665H3ZM0.87868 1.54518C1.44129 0.982574 2.20435 0.666504 3 0.666504H7C7.4089 0.666504 7.77661 0.915455 7.92848 1.29511L9.92848 6.29511C10.1108 6.75083 9.93537 7.27147 9.5145 7.524L7.8405 8.5284C8.66436 9.87202 9.79449 11.0021 11.1381 11.826L12.1425 10.152C12.395 9.73113 12.9157 9.55574 13.3714 9.73803L18.3714 11.738C18.751 11.8899 19 12.2576 19 12.6665V16.6665C19 17.4622 18.6839 18.2252 18.1213 18.7878C17.5587 19.3504 16.7957 19.6665 16 19.6665C15.9798 19.6665 15.9595 19.6659 15.9393 19.6647C11.7948 19.4128 7.88576 17.6528 4.94972 14.7168C2.01369 11.7808 0.253707 7.87169 0.00184143 3.72716C0.000614107 3.70697 0 3.68674 0 3.6665C0 2.87085 0.31607 2.10779 0.87868 1.54518Z" fill="currentColor"/>
                </svg>
            </span>
            @if(isset($phoneLink) and !empty($phoneLink))
                <a href="tel:{{ $phoneLink }}" class="flex-auto ah-text-link">
            @else
                <span class="flex-auto">
            @endif
                    {{ $phone }}
            @if(isset($phoneLink) and !empty($phoneLink))
                </a>
            @else
                </span>
            @endif
        </p>
    @endif
    @if(isset($email) and !empty($email))
        <p class="flex items-center m-0 gap-[10px] font-normal text-[16px] leading-[1.2] text-ah-medium-grey">
            <span class="flex-initial basis-[24px] mt-[0.25em]">
                <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 2.6665C2.73478 2.6665 2.48043 2.77186 2.29289 2.9594C2.21971 3.03258 2.15904 3.11595 2.11226 3.20616L10 8.46465L17.8877 3.20616C17.841 3.11595 17.7803 3.03258 17.7071 2.9594C17.5196 2.77186 17.2652 2.6665 17 2.6665H3ZM18 5.53502L10.5547 10.4986C10.2188 10.7225 9.7812 10.7225 9.4453 10.4986L2 5.53502V13.6665C2 13.9317 2.10536 14.1861 2.29289 14.3736C2.48043 14.5611 2.73478 14.6665 3 14.6665H17C17.2652 14.6665 17.5196 14.5611 17.7071 14.3736C17.8946 14.1861 18 13.9317 18 13.6665V5.53502ZM0.87868 1.54518C1.44129 0.982574 2.20435 0.666504 3 0.666504H17C17.7957 0.666504 18.5587 0.982574 19.1213 1.54518C19.6839 2.10779 20 2.87085 20 3.6665V13.6665C20 14.4622 19.6839 15.2252 19.1213 15.7878C18.5587 16.3504 17.7957 16.6665 17 16.6665H3C2.20435 16.6665 1.44129 16.3504 0.87868 15.7878C0.31607 15.2252 0 14.4622 0 13.6665V3.6665C0 2.87085 0.31607 2.10779 0.87868 1.54518Z" fill="currentColor"/>
                </svg>
            </span>
            <a href="mailto:{{ $email }}" class="flex-auto ah-text-link">{{ $email }}</a>
        </p>
    @endif
    @if(isset($url) and !empty($url))
        <p class="flex items-center m-0 gap-[10px] font-normal text-[16px] leading-[1.2] text-ah-medium-grey">
            <span class="flex-initial basis-[24px] mt-[0.25em]">
                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.585786 1.25229C0.960859 0.877218 1.46957 0.666504 2 0.666504H18C18.5304 0.666504 19.0391 0.877218 19.4142 1.25229C19.7893 1.62736 20 2.13607 20 2.6665V12.6665C20 13.1969 19.7893 13.7056 19.4142 14.0807C19.0391 14.4558 18.5304 14.6665 18 14.6665H14V16.6665H15C15.5523 16.6665 16 17.1142 16 17.6665C16 18.2188 15.5523 18.6665 15 18.6665H5C4.44772 18.6665 4 18.2188 4 17.6665C4 17.1142 4.44772 16.6665 5 16.6665H6V14.6665H2C1.46957 14.6665 0.960859 14.4558 0.585786 14.0807C0.210714 13.7056 0 13.1969 0 12.6665V2.6665C0 2.13607 0.210714 1.62736 0.585786 1.25229ZM8 14.6665V16.6665H12V14.6665H8ZM2 12.6665V2.6665L18 2.6665V12.6665H2Z" fill="currentColor"/>
                </svg>
            </span>
            <a href="https://{{ $url }}" class="flex-auto ah-text-link-underline">{{ $url }}</a>
        </p>
    @endif
</div>
