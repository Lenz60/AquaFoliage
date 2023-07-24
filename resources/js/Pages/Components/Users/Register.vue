<template>
    <div class="bg-neutral h-screen overflow-auto">
        <div
            class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0"
        >
            <div
                class="w-full h-fit bg-primary rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0"
            >
                <div
                    class="flex flex-col h-fit w-full overflow-auto md:space-y-6 sm:p-8"
                >
                    <div>
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-neutral-focus md:text-2xl"
                        >
                            Create and account
                        </h1>
                    </div>
                    <form
                        class="space-y-2 md:space-y-3"
                        method="POST"
                        action="/register"
                        enctype="multipart/form-data"
                    >
                        <div>
                            <label
                                for="email"
                                class="block mb-2 text-sm font-medium text-neutral-focus"
                                >Your email</label
                            >
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="bg-gray-50 border border-gray-300 text-neutral-focus sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="name@company.com"
                                required=""
                            />
                            <small class="text-red-700"> </small>
                        </div>
                        <div>
                            <label
                                for="name"
                                class="block mb-2 text-sm font-medium text-neutral-focus"
                                >Your name</label
                            >
                            <input
                                type="name"
                                name="name"
                                id="name"
                                class="bg-gray-50 border border-gray-300 text-neutral-focus sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="John Doe"
                                required=""
                            />
                            <small class="text-red-700"> </small>
                        </div>
                        <div>
                            <label
                                for="password"
                                class="block mb-2 text-sm font-medium text-neutral-focus"
                                >Password</label
                            >
                            <input
                                type="password"
                                name="password"
                                id="password"
                                placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-neutral-focus sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                required=""
                            />
                            <small class="text-red-700"> </small>
                        </div>
                        <div>
                            <label
                                for="confirm-password"
                                class="block mb-2 text-sm font-medium text-neutral-focus"
                                >Confirm password</label
                            >
                            <input
                                type="password"
                                name="confirm-password"
                                id="confirm-password"
                                placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-neutral-focus sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                required=""
                            />
                            <small class="text-red-700"> </small>
                        </div>
                        <button
                            type="submit"
                            class="w-full text-white bg-accent hover:bg-accent-focus focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        >
                            Create an account
                        </button>
                        <div>
                            <p class="text-sm font-light text-gray-500">
                                Already have an account?
                                <a
                                    href="/login"
                                    class="font-medium text-primary-600 hover:underline"
                                    >Login here</a
                                >
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
