<!-- Hybrid Chat Widget - Single Floating Button with WhatsApp & AI Chatbot -->
<style>
    /* Main Floating Widget */
    .chat-float-widget {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 1000;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 12px;
    }

    /* Options Container */
    .chat-options {
        display: none;
        flex-direction: column;
        gap: 10px;
        margin-bottom: 8px;
    }

    .chat-options.show {
        display: flex;
        animation: slideUp 0.3s ease;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px) scale(0.95);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    /* Individual Option Buttons */
    .chat-option {
        display: flex;
        align-items: center;
        gap: 12px;
        background: white;
        padding: 10px 18px 10px 14px;
        border-radius: 50px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        text-decoration: none;
        color: #333;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        white-space: nowrap;
    }

    .chat-option:hover {
        transform: translateX(-5px);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2);
    }

    .chat-option .icon {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 18px;
    }

    .chat-option .icon.whatsapp {
        background: #25D366;
        color: white;
    }

    .chat-option .icon.chatbot {
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        color: white;
    }

    .chat-option .label {
        font-size: 13px;
        color: #333;
    }

    .chat-option .label small {
        display: block;
        font-size: 10px;
        color: #999;
        font-weight: 400;
        margin-top: 1px;
    }

    /* Main Toggle Button */
    .chat-main-btn {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.25);
        transition: all 0.3s ease;
        border: none;
        color: white;
        position: relative;
    }

    .chat-main-btn:hover {
        transform: scale(1.08);
        box-shadow: 0 15px 40px -5px rgba(0, 0, 0, 0.3);
    }

    .chat-main-btn i {
        font-size: 28px;
        transition: transform 0.3s ease;
    }

    .chat-main-btn.active i {
        transform: rotate(90deg);
    }

    /* Badge/Pulse */
    .chat-badge {
        position: absolute;
        top: -4px;
        right: -4px;
        width: 16px;
        height: 16px;
        background: #25D366;
        border-radius: 50%;
        border: 2px solid white;
        animation: pulse-dot 2s infinite;
    }

    @keyframes pulse-dot {
        0%, 100% {
            transform: scale(1);
            opacity: 1;
        }
        50% {
            transform: scale(1.3);
            opacity: 0.7;
        }
    }

    /* Tooltip/Prompt */
    .chat-prompt {
        position: absolute;
        bottom: 70px;
        right: 0;
        background: white;
        padding: 10px 16px;
        border-radius: 16px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
        font-size: 13px;
        font-weight: 500;
        color: #333;
        white-space: nowrap;
        border-left: 4px solid #dc2626;
        display: none;
        animation: fadeInOut 3s ease;
    }

    .chat-prompt.show {
        display: block;
    }

    .chat-prompt:after {
        content: '';
        position: absolute;
        bottom: -8px;
        right: 20px;
        border-width: 8px 8px 0 8px;
        border-style: solid;
        border-color: white transparent transparent transparent;
    }

    .chat-prompt i {
        color: #dc2626;
        margin-right: 6px;
    }

    @keyframes fadeInOut {
        0% { opacity: 0; transform: translateY(10px); }
        15% { opacity: 1; transform: translateY(0); }
        85% { opacity: 1; transform: translateY(0); }
        100% { opacity: 0; transform: translateY(-10px); }
    }

    /* Responsive */
    @media (max-width: 640px) {
        .chat-float-widget {
            bottom: 20px;
            right: 20px;
        }
        .chat-option {
            padding: 8px 14px 8px 10px;
            font-size: 13px;
        }
        .chat-option .icon {
            width: 32px;
            height: 32px;
            font-size: 15px;
        }
        .chat-main-btn {
            width: 52px;
            height: 52px;
        }
        .chat-main-btn i {
            font-size: 24px;
        }
        .chat-prompt {
            font-size: 12px;
            padding: 8px 14px;
            bottom: 65px;
        }
        .chat-option .label small {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .chat-option {
            padding: 6px 10px;
        }
        .chat-option .label {
            font-size: 11px;
        }
        .chat-option .icon {
            width: 28px;
            height: 28px;
            font-size: 13px;
        }
    }
</style>

<!-- Floating Widget -->
<div class="chat-float-widget" id="chatWidget">
    <!-- Options -->
    <div class="chat-options" id="chatOptions">
        <!-- WhatsApp Option -->
        <a href="https://wa.me/265991887119?text=Hello%20SJOGU%2C%20I%20would%20like%20to%20know%20more%20about%20your%20programs" 
           target="_blank" 
           rel="noopener noreferrer" 
           class="chat-option">
            <div class="icon whatsapp">
                <i class="fab fa-whatsapp"></i>
            </div>
            <div class="label">
                WhatsApp
                <small>Chat with us</small>
            </div>
        </a>

        <!-- AI Chatbot Option -->
        <button class="chat-option" id="chatbotOption">
            <div class="icon chatbot">
                <i class="fas fa-robot"></i>
            </div>
            <div class="label">
                AI Chatbot
                <small>Ask questions</small>
            </div>
        </button>
    </div>

    <!-- Main Button -->
    <button class="chat-main-btn" id="chatMainBtn">
        <i class="fas fa-comment-dots"></i>
        <span class="chat-badge"></span>
    </button>

    <!-- Prompt -->
    <div class="chat-prompt show" id="chatPrompt">
        <i class="fas fa-robot"></i> How can we help you today?
    </div>
</div>

<!-- Chatbot Modal -->
<style>
    /* Chatbot Modal */
    .chatbot-modal {
        position: fixed;
        bottom: 100px;
        right: 30px;
        width: 350px;
        max-width: calc(100vw - 60px);
        background: white;
        border-radius: 20px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        z-index: 1001;
        display: none;
        flex-direction: column;
        overflow: hidden;
        animation: slideUp 0.3s ease;
    }
    
    .chatbot-modal.active {
        display: flex;
    }
    
    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .chatbot-header {
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        color: white;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .chatbot-header h3 {
        font-size: 16px;
        font-weight: 600;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .chatbot-header h3 i {
        font-size: 20px;
    }
    
    .chatbot-close {
        background: rgba(255,255,255,0.2);
        border: none;
        color: white;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s;
    }
    
    .chatbot-close:hover {
        background: rgba(255,255,255,0.3);
        transform: rotate(90deg);
    }
    
    .chatbot-body {
        padding: 20px;
        max-height: 350px;
        overflow-y: auto;
    }
    
    .faq-item {
        margin-bottom: 15px;
        border-bottom: 1px solid #f0f0f0;
        padding-bottom: 12px;
    }
    
    .faq-question {
        font-weight: 600;
        color: #333;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        margin-bottom: 8px;
    }
    
    .faq-question i {
        color: #dc2626;
        font-size: 12px;
        transition: transform 0.3s;
    }
    
    .faq-question.active i {
        transform: rotate(90deg);
    }
    
    .faq-answer {
        color: #666;
        font-size: 13px;
        line-height: 1.5;
        padding-left: 24px;
        display: none;
    }
    
    .faq-answer.show {
        display: block;
    }
    
    .chatbot-input-section {
        padding: 15px 20px 20px 20px;
        border-top: 1px solid #e5e7eb;
        background-color: #ffffff;
    }
    
    .chatbot-input-wrapper {
        display: flex;
        gap: 10px;
        align-items: center;
    }
    
    .chatbot-input-wrapper input {
        flex: 1;
        padding: 10px 12px;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        font-size: 13px;
        outline: none;
        transition: all 0.3s;
    }
    
    .chatbot-input-wrapper input:focus {
        border-color: #dc2626;
        box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
    }
    
    .chatbot-input-wrapper input::placeholder {
        color: #9ca3af;
        font-size: 12px;
    }
    
    .send-btn {
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        border: none;
        color: white;
        padding: 10px 16px;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 13px;
        font-weight: 500;
    }
    
    .send-btn:hover {
        transform: scale(1.02);
        background: linear-gradient(135deg, #b91c1c, #991b1b);
    }
    
    @media (max-width: 640px) {
        .chatbot-modal {
            width: calc(100vw - 40px);
            right: 20px;
            bottom: 90px;
        }
        .chatbot-body {
            max-height: 300px;
        }
    }
</style>

<!-- Chatbot Modal -->
<div class="chatbot-modal" id="chatbotModal">
    <div class="chatbot-header">
        <h3>
            <i class="fas fa-headset"></i>
            SJOGU Assistant
        </h3>
        <button class="chatbot-close" id="chatbotCloseBtn">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="chatbot-body">
        <div class="mb-4 text-center">
            <i class="fas fa-robot text-4xl text-red-600 mb-2"></i>
            <p class="text-gray-600 text-sm">Hello! I'm your virtual assistant. Here are some frequently asked questions:</p>
        </div>
        
        <!-- FAQ 1 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="1">
                <i class="fas fa-chevron-right"></i>
                When are the application deadlines?
            </div>
            <div class="faq-answer" data-answer="1">
                Applications for the 2025/2026 academic year close on <strong>May 31st, 2026</strong>.
            </div>
        </div>
        
        <!-- FAQ 2 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="2">
                <i class="fas fa-chevron-right"></i>
                What programs are offered at SJOGU?
            </div>
            <div class="faq-answer" data-answer="2">
                We offer programs in Clinical Medicine, Nursing and Midwifery, Psycho-Social Counselling, and Public Health.
            </div>
        </div>
        
        <!-- FAQ 3 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="3">
                <i class="fas fa-chevron-right"></i>
                How do I apply for admission?
            </div>
            <div class="faq-answer" data-answer="3">
                You can apply online through our Admissions section or download the application form.
            </div>
        </div>
        
        <!-- FAQ 4 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="4">
                <i class="fas fa-chevron-right"></i>
                What are the entry requirements?
            </div>
            <div class="faq-answer" data-answer="4">
                Generic programs require MSCE with 6 credits. Upgrading programs require a Diploma in a relevant field.
            </div>
        </div>
        
        <!-- FAQ 5 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="5">
                <i class="fas fa-chevron-right"></i>
                Is there accommodation available?
            </div>
            <div class="faq-answer" data-answer="5">
                Yes, we offer comfortable on-campus accommodation with single and shared rooms.
            </div>
        </div>
        
        <!-- FAQ 6 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="6">
                <i class="fas fa-chevron-right"></i>
                Is SJOGU accredited?
            </div>
            <div class="faq-answer" data-answer="6">
                Yes, SJOGU is accredited by NCHE and our programs are approved by NMCM and MCM.
            </div>
        </div>
    </div>
    
    <!-- Chat Input Section -->
    <div class="chatbot-input-section">
        <div class="chatbot-input-wrapper">
            <input type="text" 
                   id="chatbotInput" 
                   placeholder="Type your question here..."
                   autocomplete="off">
            <button id="sendChatBtn" class="send-btn">
                <i class="fas fa-paper-plane"></i>
                Send
            </button>
        </div>
    </div>
</div>

<!-- Chatbot JavaScript -->
<script>
    // Chatbot elements
    const chatbotModal = document.getElementById('chatbotModal');
    const chatbotCloseBtn = document.getElementById('chatbotCloseBtn');
    const chatbotInput = document.getElementById('chatbotInput');
    const sendChatBtn = document.getElementById('sendChatBtn');
    
    // Open chatbot modal (exposed for hybrid widget)
    function openChatbotModal() {
        chatbotModal.classList.add('active');
        setTimeout(() => {
            if (chatbotInput) chatbotInput.focus();
        }, 300);
    }
    
    // Close chatbot modal
    function closeChatbotModal() {
        chatbotModal.classList.remove('active');
    }
    
    chatbotCloseBtn?.addEventListener('click', closeChatbotModal);
    
    // Close modal when clicking outside
    document.addEventListener('click', (e) => {
        if (chatbotModal.classList.contains('active')) {
            const widget = document.getElementById('chatWidget');
            if (!chatbotModal.contains(e.target) && !widget?.contains(e.target)) {
                closeChatbotModal();
            }
        }
    });
    
    // FAQ Toggle functionality
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const faqId = question.getAttribute('data-faq');
            const answer = document.querySelector(`.faq-answer[data-answer="${faqId}"]`);
            
            answer.classList.toggle('show');
            question.classList.toggle('active');
            
            const chevron = question.querySelector('i');
            if (answer.classList.contains('show')) {
                chevron.style.transform = 'rotate(90deg)';
            } else {
                chevron.style.transform = 'rotate(0deg)';
            }
        });
    });
    
    // Demo chat response function
    function showDemoResponse() {
        const message = chatbotInput.value.trim();
        
        if (message === "") {
            alert("💬 Please type a question.\n\n💡 Try asking about:\n• Application deadlines\n• Programs offered\n• Entry requirements");
        } else {
            alert(`💬 SJOGU Assistant - Demo Response\n\n📝 You asked: "${message}"\n\n📢 This is a demonstration.\n\nFor real assistance:\n✓ WhatsApp: +265 991 887 119\n✓ Email: collegehs@sjog.mw`);
        }
        
        setTimeout(() => {
            chatbotInput.focus();
        }, 100);
    }
    
    sendChatBtn?.addEventListener('click', showDemoResponse);
    chatbotInput?.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            showDemoResponse();
        }
    });
    
    // Hybrid Chat Widget JavaScript
    document.addEventListener('DOMContentLoaded', function() {
        const chatMainBtn = document.getElementById('chatMainBtn');
        const chatOptions = document.getElementById('chatOptions');
        const chatPrompt = document.getElementById('chatPrompt');
        const chatbotOption = document.getElementById('chatbotOption');
        let isOpen = false;

        // Toggle options
        chatMainBtn.addEventListener('click', function() {
            isOpen = !isOpen;
            chatOptions.classList.toggle('show');
            this.classList.toggle('active');
            
            if (isOpen) {
                chatPrompt.style.display = 'none';
            } else {
                setTimeout(() => {
                    chatPrompt.style.display = 'block';
                }, 400);
            }
        });

        // Close when clicking outside
        document.addEventListener('click', function(e) {
            const widget = document.getElementById('chatWidget');
            if (widget && !widget.contains(e.target)) {
                if (isOpen) {
                    isOpen = false;
                    chatOptions.classList.remove('show');
                    chatMainBtn.classList.remove('active');
                    setTimeout(() => {
                        chatPrompt.style.display = 'block';
                    }, 400);
                }
            }
        });

        // Chatbot option - opens the chatbot modal
        chatbotOption.addEventListener('click', function() {
            isOpen = false;
            chatOptions.classList.remove('show');
            chatMainBtn.classList.remove('active');
            openChatbotModal();
        });

        // Auto-hide prompt after 8 seconds
        setTimeout(() => {
            if (chatPrompt) {
                chatPrompt.style.opacity = '0';
                setTimeout(() => {
                    if (chatPrompt) {
                        chatPrompt.style.display = 'none';
                        chatPrompt.style.opacity = '1';
                    }
                }, 500);
            }
        }, 8000);

        // Show prompt again after 30 seconds
        setTimeout(() => {
            if (!isOpen && chatPrompt) {
                chatPrompt.style.display = 'block';
                chatPrompt.style.animation = 'fadeInOut 3s ease';
                setTimeout(() => {
                    if (chatPrompt) {
                        chatPrompt.style.display = 'none';
                    }
                }, 4000);
            }
        }, 30000);
    });
</script>