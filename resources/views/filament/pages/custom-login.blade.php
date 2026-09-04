<div class="custom-login-wrapper"
    style="display: flex; align-items: center; justify-content: flex-end; min-height: 100vh; width: 100%; position: relative; font-family: 'Inter', sans-serif; background: linear-gradient(135deg, #FCF9F0 0%, #FFFDF7 40%, #FFFFFF 100%);">

    <div class="custom-login-card"
        style="width: 100%; max-width: 440px; background-color: #ffffff; border-radius: 12px; box-shadow: 0 20px 50px -12px rgba(0,0,0,0.1), 0 0 15px rgba(0,0,0,0.03); padding: 40px; margin-right: 15%; margin-left: 20px; z-index: 10;">

        <!-- Header -->
        <div style="text-align: center; margin-bottom: 32px;">
            <h1 style="color: #111827; font-size: 1.25rem; line-height: 1.5; font-weight: 700; margin: 0; padding: 0;">
                PSuite</h1>
            <h2
                style="color: #111827; font-size: 1.7rem; line-height: 1.2; font-weight: 700; margin: 4px 0 0 0; padding: 0;">
                Login</h2>
        </div>

        <!-- Form -->
        <form wire:submit.prevent="authenticate" style="display: flex; flex-direction: column; gap: 24px;">
            {{ $this->form }}

            <button type="submit"
                style="width: 100%; display: flex; justify-content: center; padding: 10px 16px; font-size: 0.875rem; font-weight: 500; color: #ffffff; background-color: #d97706; border: none; border-radius: 6px; margin-top: 24px; cursor: pointer; transition: opacity 0.2s;"
                onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                Sign in
            </button>
        </form>

    </div>
</div>

<style>
    /* Reset Filament Base Layout if it tries to constrain us */
    body {
        margin: 0 !important;
        padding: 0 !important;
    }

    .filament-main {
        padding: 0 !important;
        margin: 0 !important;
        max-width: none !important;
        width: 100% !important;
    }

    /* Responsive adjustment for Mobile screens */
    @media (max-width: 1024px) {
        .custom-login-wrapper {
            justify-content: center !important;
        }

        .custom-login-card {
            margin-right: 20px !important;
            margin-left: 20px !important;
        }
    }

    /* Filament form inputs overrides */
    .filament-forms-input {
        border-radius: 6px !important;
        border: 1px solid #e5e7eb !important;
        padding: 8px 12px !important;
        width: 100% !important;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05) !important;
    }

    .filament-forms-input:focus {
        outline: none !important;
        border-color: #d97706 !important;
        box-shadow: 0 0 0 1px #d97706 !important;
    }

    .filament-forms-checkbox {
        border-radius: 4px !important;
        width: 1rem !important;
        height: 1rem !important;
        margin-right: 8px !important;
    }

    .filament-forms-checkbox:checked {
        background-color: #d97706 !important;
        border-color: #d97706 !important;
    }

    .filament-forms-checkbox:focus {
        outline: none !important;
        box-shadow: 0 0 0 2px rgba(217, 119, 6, 0.2) !important;
    }

    .filament-forms-field-wrapper-label {
        font-weight: 500 !important;
        color: #4b5563 !important;
        font-size: 0.875rem !important;
        display: block !important;
        margin-bottom: 8px !important;
    }

    .filament-forms-field-wrapper-label sup {
        color: #ef4444 !important;
        /* Red Asterisk */
    }
</style>