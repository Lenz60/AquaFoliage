<template>
    <div>
        <div v-if="Class == 'hide'">
            <ul>
                <li>
                    <details close>
                        <summary class="w-full h-full text-lg">
                            <div>
                                <img
                                    src="/icons/algaeico.png"
                                    class="w-[42px] h-[35.72px]"
                                />
                            </div>
                            <div>Algae Characteristics</div>
                        </summary>
                        <ul>
                            <li v-for="algae in Algaes">
                                <Link
                                    :href="route('plantCharacteristic')"
                                    :data="{ content: 'algae', id: algae.id }"
                                    ><a>{{ algae.name }}</a></Link
                                >
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
                        <summary class="w-full h-full text-lg">
                            <div>
                                <img
                                    src="/icons/algaeico.png"
                                    class="w-[42px] h-[35.72px]"
                                />
                            </div>
                            <div>Algae Characteristics</div>
                        </summary>
                        <ul>
                            <li v-for="algae in Algaes">
                                <Link
                                    :href="route('plantCharacteristic')"
                                    :data="{ content: 'algae', id: algae.id }"
                                >
                                    <div v-if="Payload['id'] == algae.id">
                                        <a
                                            class="p-10 py-2 w-full h-max text-accent"
                                            >{{ algae.name }}</a
                                        >
                                    </div>
                                    <div v-else>
                                        <a>{{ algae.name }}</a>
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
    props: ["Class", "Algaes", "Payload"],
    components: {
        Link,
    },
    setup() {},
};
</script>

<!-- <style lang="scss" scoped></style> -->
