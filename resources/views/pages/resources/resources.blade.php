  <!-- Download Application Form Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="bg-red-800 px-6 py-4">
                    <h3 class="text-xl font-bold text-white flex items-center gap-2">
                        <i class="fas fa-download"></i> Downloads
                    </h3>
                </div>
                <div class="p-6">
    <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mb-4 mx-auto">
        <i class="fas fa-download text-3xl text-red-600"></i>
    </div>
    <h4 class="text-lg font-bold text-gray-800 text-center mb-3">Downloads & Resources</h4>
    <p class="text-gray-600 text-sm text-center mb-4">
        Download application forms, fees structure, and other important documents.
    </p>
    <div class="space-y-3 mb-6">
        <div class="flex items-center justify-between gap-2 p-2 hover:bg-gray-50 rounded-lg transition">
            <div class="flex items-center gap-2">
                <i class="fas fa-file-pdf text-red-500 text-lg"></i>
                <span class="text-sm text-gray-700">Undergraduate Application Form</span>
            </div>
            <button onclick="downloadForm('undergraduate')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition">
                <i class="fas fa-download text-xs"></i> Download
            </button>
        </div>
        <div class="flex items-center justify-between gap-2 p-2 hover:bg-gray-50 rounded-lg transition">
            <div class="flex items-center gap-2">
                <i class="fas fa-file-pdf text-red-500 text-lg"></i>
                <span class="text-sm text-gray-700">Postgraduate Application Form</span>
            </div>
            <button onclick="downloadForm('postgraduate')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition">
                <i class="fas fa-download text-xs"></i> Download
            </button>
        </div>
        <div class="flex items-center justify-between gap-2 p-2 hover:bg-gray-50 rounded-lg transition">
            <div class="flex items-center gap-2">
                <i class="fas fa-file-pdf text-red-500 text-lg"></i>
                <span class="text-sm text-gray-700">International Student Application Form</span>
            </div>
            <button onclick="downloadForm('international')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition">
                <i class="fas fa-download text-xs"></i> Download
            </button>
        </div>
        <div class="flex items-center justify-between gap-2 p-2 hover:bg-gray-50 rounded-lg transition">
            <div class="flex items-center gap-2">
                <i class="fas fa-file-invoice-dollar text-red-500 text-lg"></i>
                <span class="text-sm text-gray-700">Fees Structure 2026/2027</span>
            </div>
            <button onclick="downloadForm('fees')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition">
                <i class="fas fa-download text-xs"></i> Download
            </button>
        </div>
        <div class="flex items-center justify-between gap-2 p-2 hover:bg-gray-50 rounded-lg transition">
            <div class="flex items-center gap-2">
                <i class="fas fa-file-pdf text-red-500 text-lg"></i>
                <span class="text-sm text-gray-700">Scholarship Application Form</span>
            </div>
            <button onclick="downloadForm('scholarship')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition">
                <i class="fas fa-download text-xs"></i> Download
            </button>
        </div>
    </div>
    <div class="flex gap-3">
        <button onclick="downloadAllForms()" class="flex-1 bg-gray-800 text-white py-2 rounded-lg font-semibold hover:bg-gray-900 transition flex items-center justify-center gap-2 text-sm">
            <i class="fas fa-download"></i> Download All
        </button>
        <button onclick="viewAllForms()" class="flex-1 bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition flex items-center justify-center gap-2 text-sm">
            <i class="fas fa-eye"></i> View All
        </button>
    </div>
</div>
               
</div>