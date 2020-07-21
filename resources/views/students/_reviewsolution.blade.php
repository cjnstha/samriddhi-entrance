<div class="tw-flex tw-justify-center tw-flex-col">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2" class="tw-h-16">
        <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1"
                cy="65.1"
                r="62.1"/>
        <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round"
                  stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
    </svg>
    <h3 style="font-weight: 700;color:#22292f;font-size: 2.5rem;">
        You Got {{ $studentdata->marks }} out of {{ $total_val }} right!
    </h3>
    <div class="tw-mt-12">
        <a href="/student" class="hover:tw-text-white tw-bg-blue-400 tw-border-8 tw-p-3 tw-rounded">Go Back>>>
        </a></div>
</div>
