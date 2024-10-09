<div clss="w-full">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Expenses')}}
        </h2>
    </x-slot>

    <section class="py-4 space-y-6">
        <p class="bg-gray-600 text-white p-2">Add Expenses</p>
        <livewire:expenses.create-expense />

        <div class="md__table_wrapper">
            <p class="bg-gray-600 text-white p-2">Your expenses today</p>

            <table class="md__table">
                <thead class="md__thead">
                    <tr>
                        <th class="md__th md__th1">S/N</th>
                        <th class="md__th text-left">{{__('Item')}}</th>
                        <th class="md__th text-left">{{__('Cost')}}</th>
                        <th class="md__th text-left">{{__('Date')}}</th>
                    </tr>
                </thead>
                <tbody class="md__tbody">
                    <tr class="md__tr">
                        <td class="md__td">1</td>
                        <td class="md__td">Chakula</td>
                        <td class="md__td">4000</td>
                        <td class="md__td">12-06-2024 12:00</td>
                    </tr>
                    <tr class="md__tr">
                        <td class="md__td">1</td>
                        <td class="md__td">Chakula</td>
                        <td class="md__td">4000</td>
                        <td class="md__td">12-06-2024 12:00</td>
                    </tr>
                    <tr class="md__tr">
                        <td class="md__td">1</td>
                        <td class="md__td">Chakula</td>
                        <td class="md__td">4000</td>
                        <td class="md__td">12-06-2024 12:00</td>
                    </tr>
                    <tr class="md__tr">
                        <td class="md__td">1</td>
                        <td class="md__td">Chakula</td>
                        <td class="md__td">4000</td>
                        <td class="md__td">12-06-2024 12:00</td>
                    </tr>
                    <tr class="md__tr">
                        <td class="md__td">1</td>
                        <td class="md__td">Chakula</td>
                        <td class="md__td">4000</td>
                        <td class="md__td">12-06-2024 12:00</td>
                    </tr>
                    <tr class="md__tr">
                        <td class="md__td">1</td>
                        <td class="md__td">Chakula</td>
                        <td class="md__td">4000</td>
                        <td class="md__td">12-06-2024 12:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
