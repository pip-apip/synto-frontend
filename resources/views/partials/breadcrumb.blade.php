<div class="block justify-between page-header md:flex">
    <div>
        <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">
            {{ $page_title ?? 'Page Title' }}
            @if (isset($form_page))
            <a href="{{ route($form_page) }}" class="ti-btn ti-btn-ghost-success">
                <i class="ri-add-line"></i>
            </a>
            @endif
        </h3>
    </div>
    <ol class="flex items-center whitespace-nowrap min-w-0">
        <li class="text-sm">
            <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate"
                href="javascript:void(0);">
                {{ $page_breadcrumb ?? 'Home' }}
                <i
                    class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
            </a>
        </li>
        <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
            {{ $page_sub_breadcrumb ?? 'Sub Page' }}
        </li>
    </ol>
</div>