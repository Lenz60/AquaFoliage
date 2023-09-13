<template>
    <div>
        <div v-if="Class == 'hide'">
            <ul>
                <li>
                    <details close>
                        <summary class="w-full h-full">
                            <div>
                                <img
                                    src="/icons/nutrientico.png"
                                    class="w-[42px] h-[34.29px] hidden md:hidden sm:hidden lg:hidden xl:block"
                                />
                            </div>
                            <div
                                class="text-xs sm:text-xs md:text-md lg:text-lg xl:text-lg"
                            >
                                Nutrient Deficiencies
                            </div>
                        </summary>
                        <ul>
                            <li v-for="nutDef in NutDefs">
                                <Link
                                    :href="route('plantCharacteristic')"
                                    :data="{ content: 'nutDef', id: nutDef.id }"
                                >
                                    <a>{{ nutDef.name }}</a>
                                </Link>
                            </li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
        <div v-else-if="Class == 'show'">
            <ul>
                <li>
                    <details open>
                        <summary class="w-full h-full">
                            <div>
                                <img
                                    src="/icons/nutrientico.png"
                                    class="w-[42px] h-[34.29px] hidden md:hidden sm:hidden lg:hidden xl:block"
                                />
                            </div>
                            <div
                                class="text-xs sm:text-xs md:text-md lg:text-lg xl:text-lg"
                            >
                                Nutrient Deficiencies
                            </div>
                        </summary>
                        <ul>
                            <li v-for="nutDef in NutDefs">
                                <Link
                                    :href="route('plantCharacteristic')"
                                    :data="{ content: 'nutDef', id: nutDef.id }"
                                >
                                    <div v-if="Payload['id'] == nutDef.id">
                                        <a
                                            class="p-10 py-2 w-full h-max text-accent"
                                            >{{ nutDef.name }}</a
                                        >
                                    </div>
                                    <div v-else>
                                        <a>{{ nutDef.name }}</a>
                                    </div>
                                </Link>
                            </li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    props: ["Class", "NutDefs", "Payload"],
    components: {
        Link,
    },
    setup() {
        return {};
    },
};
</script>

<!-- <style lang="scss" scoped></style> -->
