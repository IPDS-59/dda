<script lang="ts">
import AuthLayout from "@/layouts/auth.vue";
export default {
    layout: AuthLayout,
}
</script>

<script lang="ts" setup>
import axios from "axios";
import { string } from "vue-types";
import { notify } from "notiwind";
import { ref, defineAsyncComponent } from "vue";
import { trans } from 'laravel-vue-i18n'

const VInput = defineAsyncComponent(() => import('@/components/VInput/index.vue'));

import { Link, Head, useForm } from "@inertiajs/vue3";

const form = useForm({
    email: null,
    password: null,
    remember: false,
});

const obscurePassword = ref(true);


const login = async () => {
    if (form.procesing) {
        return;
    }

    form.post('/login', {
        preserveScroll: true,
        onSuccess: (page) => window.location.reload(),
        onError: (err) => notify({
            type: 'error',
            group: 'top',
            text: 'Gagal login!',
        }, 2500),
    },);
}


defineProps({
    title: string(),
})
</script>
<template>

    <Head :title="title" />

    <div class="min-h-screen h-full flex flex-col after:flex-1">
        <div class="flex-1"></div>
        <div class="px-4 py-8 w-full">
            <Link :href="route('landing')">
            <img v-lazy="{
                loading: '/images/loading-blog.gif', src: '/logo/dasi_logo_primary.svg'
            }" class="mx-auto rounded-xl" width="341" height="148" alt="">
            </Link>
            <div class="w-full sm:w-1/2 xl:w-1/4 mx-auto my-8 flex flex-col">
                <VInput name="email" id="email" :label="trans('auth.form.label.username_email')"
                    :is-label-outside="false" is-filled fill-color="bg-primary-100" v-model="form.email"
                    :error-msg="form.errors.email" v-on:update:model-value="form.clearErrors('email')" />

                <VInput name="password" id="password" show-suffix :label="trans('auth.form.label.password')"
                    :is-label-outside="false" is-filled fill-color="bg-primary-100" v-model="form.password"
                    :error-msg="form.errors.password" v-on:update:model-value="form.clearErrors('password')"
                    class="mt-4" :obscure="obscurePassword">
                    <template v-slot:suffix>
                        <div @click="obscurePassword = !obscurePassword" class="cursor-pointer">
                            <svg v-if="!obscurePassword" width="36" height="36" viewBox="0 0 12 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 7L10 15.25" stroke="#475569" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M7.51074 12.5123C7.16664 12.8275 6.71645 13.0016 6.2498 12.9998C5.87136 12.9998 5.50179 12.8852 5.18968 12.6712C4.87756 12.4572 4.63751 12.1537 4.50108 11.8008C4.36465 11.4478 4.33823 11.0617 4.42529 10.6935C4.51235 10.3252 4.70882 9.99185 4.98886 9.7373"
                                    stroke="#475569" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M3.71875 8.34082C1.80625 9.30645 1 11.1252 1 11.1252C1 11.1252 2.5 14.5002 6.25 14.5002C7.12871 14.5074 7.99645 14.3049 8.78125 13.9096"
                                    stroke="#475569" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M10.0277 13.0516C11.0496 12.1375 11.4996 11.125 11.4996 11.125C11.4996 11.125 9.99961 7.75001 6.24961 7.75001C5.92451 7.74937 5.59993 7.77603 5.2793 7.8297"
                                    stroke="#475569" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M6.60156 9.2832C7.0003 9.35875 7.36365 9.56195 7.63677 9.86213C7.90989 10.1623 8.07797 10.5432 8.11563 10.9473"
                                    stroke="#475569" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <svg v-else width="36" height="36" viewBox="0 0 12 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 7.625C2.25 7.625 0.75 11 0.75 11C0.75 11 2.25 14.375 6 14.375C9.75 14.375 11.25 11 11.25 11C11.25 11 9.75 7.625 6 7.625Z"
                                    stroke="#475569" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M6 12.875C7.03553 12.875 7.875 12.0355 7.875 11C7.875 9.96447 7.03553 9.125 6 9.125C4.96447 9.125 4.125 9.96447 4.125 11C4.125 12.0355 4.96447 12.875 6 12.875Z"
                                    stroke="#475569" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </template>
                </VInput>
                <div class="mt-6 flex justify-between">
                    <div class="flex flex-wrap items-center">
                        <input id="remember" type="checkbox"
                            class="rounded bg-gray-300 border-gray-100 focus:ring-0 accent-purple-500"
                            :checked="form.remember">

                        <label for="remember" class="ml-2 cursor-pointer">{{
                            trans('auth.form.label.remember_me')
                        }}</label>
                    </div>
                    <div>
                        <Link href="#" class="hover:text-gray-400 hover:underline">{{
                            trans('auth.button.forgot_password')
                        }}</Link>
                    </div>
                </div>
                <button :disabled="form.procesing"
                    class="mt-8 mx-auto text-center font-bold px-4 py-2 bg-gradient-to-r from-primary-400 to-secondary text-white rounded-lg text-xl w-1/2"
                    @click.prevent="login">
                    {{ trans('auth.button.login').toUpperCase() }}
                </button>
            </div>
        </div>
    </div>

</template>
