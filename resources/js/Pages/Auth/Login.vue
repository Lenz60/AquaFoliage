<template>
    <GuestLayout class="bg-neutral">
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-white-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full text-neutral-focus focus:border-accent"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full text-neutral-focus"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400"
                        >Remember me</span
                    >
                </label>
            </div>
            <div class="block mt-2">
                <Link :href="route('register')">
                    <label class="flex items-center hover:cursor-pointer">
                        <span
                            class="ml-2 text-sm text-gray-600 dark:text-gray-400"
                            >Dont have an account ? Register here</span
                        >
                    </label>
                </Link>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                >
                    Forgot your password?
                </Link>

                <PrimaryButton
                    class="ml-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Log in
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>

<script>
import Checkbox from "@/Components/Checkbox.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { onUpdated } from "vue";
import VueCookies from "vue-cookies";
import { ref } from "vue";
import { onMounted } from "vue";

export default {
    components: {
        Head,
        Checkbox,
        GuestLayout,
        InputError,
        InputLabel,
        PrimaryButton,
        TextInput,
        Link,
    },
    props: {
        canResetPassword: Boolean,
        status: String,
    },
    setup() {
        const emailCookies = ref(VueCookies.get("email"));
        let rememberedEmail = ref(emailCookies ? emailCookies : "");

        const form = useForm({
            email: rememberedEmail.value,
            password: "",
            remember: false,
        });
        const submit = () => {
            form.post(route("login"), {
                onFinish: () => form.reset("password"),
            });
        };
        return { form, submit };
    },
};
</script>
