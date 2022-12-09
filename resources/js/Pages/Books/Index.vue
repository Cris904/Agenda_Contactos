<script setup>
    import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
    import { Head } from "@inertiajs/inertia-vue3";
    import BreezeButton from "@/Components/PrimaryButton.vue";
    import { Link } from "@inertiajs/inertia-vue3";
    import { Inertia } from "@inertiajs/inertia";
    import { useForm } from '@inertiajs/inertia-vue3'

    const props = defineProps({
        books: {
            type: Object,
            default: () => ({}),
        },
    });
    const form = useForm();

    function destroy(id) {
        if (confirm("Are you sure you want to Delete")) {
            form.delete(route('books.destroy', id));
        }
    }
    </script>

    <template>

      <Head title="Books" />

    <BreezeAuthenticatedLayout>
            <template #header>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Books Index
                </h2>
            </template>

            <div class="py-12">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <!-- <div
                        v-if="$page.props.flash.message"
                        class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                        role="alert"
                    >
                        <span class="font-medium">
                            {{ $page.props.flash.message }}
                        </span>
                    </div> -->
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                           <div class="mb-2">
                                <Link :href="route('books.create')">
                                    <BreezeButton>Add Book</BreezeButton></Link
                                >
                            </div>
                             <div
                                class="relative overflow-x-auto shadow-md sm:rounded-lg"
                            >
                            <div id="books">
                            <input type="text"
                                        
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Buscar" v-model="name">
                                <table
                                    class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                    
                                >
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                                    >
                                        <tr>
                                            <th scope="col" class="px-6 py-3">#</th>
                                            <th scope="col" class="px-6 py-3">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Phone
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Age
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Email
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Edit
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Delete
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="book in books"
                                            :key="book.id"
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                        >
                                            <th
                                                scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"
                                            >
                                                {{ book.id }}
                                            </th>
                                            <th
                                                scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"
                                            >
                                                {{ book.name }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ book.phone }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ book.age }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ book.email }}
                                            </td>


                                            <td class="px-6 py-4">
                                                <Link
                                                    :href="
                                                        route(
                                                            'books.edit',
                                                            book.id
                                                        )
                                                    "
                                                   class="px-4 py-2 text-white bg-blue-600 rounded-lg" >Edit</Link
                                                >
                                            </td>
                                            <td class="px-6 py-4">
                                                <BreezeButton
                                                    class="bg-red-700"
                                                    @click="destroy(book.id)"
                                                >
                                                    Delete
                                                </BreezeButton>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </BreezeAuthenticatedLayout>
    </template>

