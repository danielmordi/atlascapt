<div>
    @if ($successMessage)
        <div class="alert alert-success"
            style="background-color: #10b981; color: white; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
            <i class="fas fa-check-circle"></i> {{ $successMessage }}
        </div>
    @endif

    @if ($errorMessage)
        <div class="alert alert-danger"
            style="background-color: #ef4444; color: white; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
            <i class="fas fa-exclamation-triangle"></i> {{ $errorMessage }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="elementor-element elementor-element-83e24a2 e-flex e-con-boxed e-con e-parent" data-id="83e24a2"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-ce1dfd9 e-flex e-con-boxed e-con e-child"
                    data-id="ce1dfd9" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-76ae127 e-flex e-con-boxed e-con e-child"
                            data-id="76ae127" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-96dd065 e-flex e-con-boxed e-con e-child"
                                    data-id="96dd065" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-2d3abf9 elementor-widget elementor-widget-mf-listing-fname"
                                            data-id="2d3abf9" data-element_type="widget">
                                            <div class="elementor-widget-container">
                                                <div class="mf-input-wrapper">
                                                    <input type="text"
                                                        class="mf-input @error('name') is-invalid @enderror"
                                                        id="mf-input-text-2d3abf9" wire:model.defer="name"
                                                        placeholder="Name" />
                                                    @error('name')
                                                        <span class="mf-error-message"
                                                            style="color: #ef4444; font-size: 12px; margin-top: 5px; display: block;">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-af0e522 e-flex e-con-boxed e-con e-child"
                                    data-id="af0e522" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-6eeeaaf elementor-widget elementor-widget-mf-telephone"
                                            data-id="6eeeaaf" data-element_type="widget">
                                            <div class="elementor-widget-container">
                                                <div class="mf-input-wrapper">
                                                    <input type="tel"
                                                        class="mf-input @error('phone') is-invalid @enderror"
                                                        id="mf-input-telephone-6eeeaaf" wire:model.defer="phone"
                                                        placeholder="Phone Number" />
                                                    @error('phone')
                                                        <span class="mf-error-message"
                                                            style="color: #ef4444; font-size: 12px; margin-top: 5px; display: block;">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-e6f4a65 e-flex e-con-boxed e-con e-child"
                            data-id="e6f4a65" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-d2e5c0a elementor-widget elementor-widget-mf-email"
                                    data-id="d2e5c0a" data-element_type="widget">
                                    <div class="elementor-widget-container">
                                        <div class="mf-input-wrapper">
                                            <input type="email" class="mf-input @error('email') is-invalid @enderror"
                                                id="mf-input-email-d2e5c0a" wire:model.defer="email"
                                                placeholder="Email" />
                                            @error('email')
                                                <span class="mf-error-message"
                                                    style="color: #ef4444; font-size: 12px; margin-top: 5px; display: block;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-8f60837 elementor-widget elementor-widget-mf-textarea"
                                    data-id="8f60837" data-element_type="widget">
                                    <div class="elementor-widget-container">
                                        <div class="mf-input-wrapper">
                                            <textarea class="mf-input mf-textarea @error('message') is-invalid @enderror" id="mf-input-text-area-8f60837"
                                                wire:model.defer="message" placeholder="Message" cols="30" rows="10"></textarea>
                                            @error('message')
                                                <span class="mf-error-message"
                                                    style="color: #ef4444; font-size: 12px; margin-top: 5px; display: block;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-e67c437 mf-btn--justify mf-btn--tablet-justify mf-btn--mobile-justify elementor-widget elementor-widget-mf-button"
                                    data-id="e67c437" data-element_type="widget">
                                    <div class="elementor-widget-container">
                                        <div class="mf-btn-wraper">
                                            <button type="submit" class="metform-btn metform-submit-btn"
                                                wire:loading.attr="disabled" wire:target="submit">
                                                <span wire:loading.remove wire:target="submit">Send Now</span>
                                                <span wire:loading wire:target="submit">Sending...</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
