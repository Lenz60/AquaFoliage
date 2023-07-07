<template>
    <div class="flex justify-center items-center border-2 border-red-500">
        <div
            class="flex-row justify-center items-center border-2 border-blue-400 m-5"
        >
            <h1 class="shadow-xl text-xl rounded-sm m-5 text-center">
                Sacabambaspis
            </h1>
            <div
                class="card shadow-xl bg-secondary-content rounded-sm m-5 p-5 w-96 border-2 border-green-400"
            >
                <div v-if="fish > 0">
                    <img
                        src="/images/sacaGlare.png"
                        @click="fish++"
                        class="hover:cursor-pointer"
                    />
                </div>
                <div v-else>
                    <img
                        @click="fish++"
                        class="hover:cursor-pointer"
                        src="https://preview.redd.it/the-sacabambaspis-an-extinct-genus-of-jawless-fish-v0-mn6hrm3yk5sa1.jpg?auto=webp&s=fff00db26e0b861d1a4beff64ae3398a11aa68a1"
                        alt=""
                    />
                </div>
                <h1
                    v-if="fish > 0"
                    class="text-lg font-semibold text-secondary-focus text-center m-5"
                >
                    You touch that fish {{ fish }} times
                </h1>
                <p>
                    There's no doubt that social economic development requires
                    the analysis of existing financial and administrative
                    conditions. It should be noted that hi-tech concept of the
                    social system plays an important part in the formation of
                    the tasks given by the society and government. It should be
                    noted that the understanding of nature of resource saving
                    technologies plays an important part in the formation of
                    strengthening the democratic system.
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["fish"],
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
