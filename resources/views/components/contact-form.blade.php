<form action="/send-email" method="POST" class="space-y-8 border-2 border-white rounded p-2 text-white">
    @csrf
    <div>
        <label for="email" class="block mb-2 text-sm font-medium text-whitedark:text-gray-300">Your email</label>
        <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-whitetext-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
    </div>
    <div>
        <label for="subject" class="block mb-2 text-sm font-medium text-whitedark:text-gray-300">Subject</label>
        <input type="text" id="subject" class="block p-3 w-full text-sm text-whitebg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
    </div>
    <div class="sm:col-span-2">
        <label for="message" class="block mb-2 text-sm font-medium text-whitedark:text-gray-400">Your message</label>
        <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-whitebg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
    </div>
    <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-black rounded-lg bg-white sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
</form>