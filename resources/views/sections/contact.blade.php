<form id="contactForm" class="space-y-4">
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
        <input type="text" id="name" name="name"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all"
            placeholder="Nama Anda"
            required>
        <p class="text-red-500 text-sm mt-1 hidden" id="name-error">Nama harus diisi</p>
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" id="email" name="email"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all"
            placeholder="email@anda.com"
            required>
        <p class="text-red-500 text-sm mt-1 hidden" id="email-error">Email tidak valid</p>
    </div>

    <div>
        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subjek</label>
        <input type="text" id="subject" name="subject"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all"
            placeholder="Subjek pesan">
    </div>

    <div>
        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
        <textarea id="message" name="message" rows="4"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all"
            placeholder="Tulis pesan Anda di sini..."
            required></textarea>
        <p class="text-red-500 text-sm mt-1 hidden" id="message-error">Pesan harus diisi</p>
    </div>

    <div>
        <button type="submit"
            class="w-full bg-gradient-to-r from-orange-500 to-orange-600 text-white font-medium py-3 px-4 rounded-lg hover:from-orange-600 hover:to-orange-700 transition-all transform hover:scale-[1.02] shadow-lg hover:shadow-orange-200 flex items-center justify-center">
            <span id="submit-text">Kirim Pesan</span>
            <svg id="submit-spinner" class="w-5 h-5 ml-2 animate-spin hidden" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </button>
    </div>

    <div id="form-success" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded hidden"></div>
</form>