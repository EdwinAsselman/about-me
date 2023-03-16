@props([
    'root' => 'root',
    'child' => '',
    'page' => 'current page'
])

<div class="flex items-center bg-white rounded-tl-md rounded-tr-md mb-8 shadow-md">
    <div class="flex flex-col">
        <div class="pt-3 pb-3">
            <nav aria-label="Breadcrumb">
                <ol role="list" class="px-4 flex space-x-2">
                    <li>
                        <div class="flex items-center">
                            <a href="{{ route($root) }}" class="mr-2 text-sm font-medium text-gray-900 capitalize select-none">{{ $root }}</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>

                    @if($child)
                        <li>
                            <div class="flex items-center">
                                <a href="{{ route($child) }}" class="mr-2 text-sm font-medium text-gray-900 capitalize select-none">{{ $child }}</a>
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                </svg>
                            </div>
                        </li>
                    @endif

                    <li class="text-sm">
                        <span href="#" aria-current="page" class="font-medium text-gray-500 capitalize select-none">{{ $page }}</span>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
