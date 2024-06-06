<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome - QoD" />

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</Link>

            <template v-else>
                <Link :href="route('login')" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</Link>
            </template>
        </div>

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <svg class="block h-9 w-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                        <circle cx="100" cy="100" r="90" stroke="black" stroke-width="3" fill="lightblue" />
                    
                        <text x="50" y="110" font-family="Arial, sans-serif" font-size="48" fill="black" transform="rotate(-10 100 100)">
                        QoD
                        </text>
                    
                        <path d="M20,180 Q50,100 80,180 T140,180" stroke="darkblue" stroke-width="5" fill="none" />
                        <path d="M40,160 Q70,80 100,160 T160,160" stroke="darkblue" stroke-width="5" fill="none" />
                        <circle cx="100" cy="40" r="5" fill="yellow" />
                        <circle cx="120" cy="60" r="3" fill="yellow" />
                        <circle cx="80" cy="60" r="3" fill="yellow" />

                        <polygon points="95,15 105,15 100,5" fill="white" opacity="0.8" />
                        <polygon points="185,95 195,95 190,85" fill="white" opacity="0.8" />
                        <polygon points="95,185 105,185 100,175" fill="white" opacity="0.8" />
                </svg>
            </div>
        </div>
    </div>
</template>

<style>
.bg-dots-lighter {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.5)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-darker {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.5)'/%3E%3C/svg%3E");
    }
}

</style>
