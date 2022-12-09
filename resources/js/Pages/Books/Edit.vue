<script setup>
    import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
    import { Head } from "@inertiajs/inertia-vue3";
    import BreezeButton from "@/Components/PrimaryButton.vue";
    import { Link } from "@inertiajs/inertia-vue3";
    import { useForm } from "@inertiajs/inertia-vue3";

    const props = defineProps({
        book: {
            type: Object,
            default: () => ({}),
        },
    });

    const form = useForm({
        id: props.book.id,
        name: props.book.name,
        phone: props.book.phone,
        date_birth: props.book.date_birth,
        gender: props.book.gender,
        addres: props.book.addres,
        age: props.book.age,
        email: props.book.email,
    });


    const submit = () => {
        form.put(route("books.update", props.book.id));
    };
    </script>

    <template>
        <Head title="Book Edit" />

        <BreezeAuthenticatedLayout>
            <template #header>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Book Edit
                </h2>
            </template>

            <div class="py-12">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <form @submit.prevent="submit">
                                <div class="mb-6">
                                    <label
                                        for="Name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Name</label
                                    >
                                    <input
                                        type="text"
                                        v-model="form.name"
                                        name="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder=""
                                    />
                                    <div
                                        v-if="form.errors.name"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.name }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="Phone"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Phone</label
                                    >
                                    <input
                                        type="number"
                                        v-model="form.phone"
                                        name="phone"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder=""
                                    />
                                    <div
                                        v-if="form.errors.phone"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.phone }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="Date_birth"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Date birth</label
                                    >
                                    <input
                                        type="date"
                                        v-model="form.date_birth"
                                        name="date_birth"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder=""
                                    />
                                    <div
                                        v-if="form.errors.date_birth"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.date_birth }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="Gender"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Gender</label>
                                        <select 
                                        v-model="form.gender"
                                        name="gender"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        >
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>
                                                </select>
                                                <div
                                        v-if="form.errors.gender"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.gender }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="Addres"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Address</label
                                    >
                                    <input
                                        type="text"
                                        v-model="form.addres"
                                        name="addres"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder=""
                                    />
                                    <div
                                        v-if="form.errors.addres"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.addres }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="Age"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Age</label
                                    >
                                    <input
                                        type="number"
                                        v-model="form.age"
                                        name="age"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder=""
                                    />
                                    <div
                                        v-if="form.errors.age"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.age }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="Email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Email</label
                                    >
                                    <input
                                        type="text"
                                        v-model="form.email"
                                        name="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder=""
                                    />
                                    <div
                                        v-if="form.errors.email"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.email }}
                                    </div>
                                </div>
                                <button
                                    type="submit"
                                    class="text-white bg-blue-700  focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 "
                                    :disabled="form.processing"
                                    :class="{ 'opacity-25': form.processing }"
                                >
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </BreezeAuthenticatedLayout>
    </template>