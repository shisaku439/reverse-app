<?php

use function Livewire\Volt\{state, mount};

state(['mode', 'word', 'word_tfm']);

mount(function () {
    //大文字小文字変換
    switch ($this->mode) {
        case 'upper':
            $this->word_tfm = strtoupper($this->word);
            break;
        case 'lower':
            $this->word_tfm = strtolower($this->word);
            break;
    }
});

?>

<div>
    <h1>元の値</h1>
    <p>
        {{ $word }}
    </p>
    @if ($mode == 'upper')
        <h1>大文字に変換</h1>
    @elseif($mode == 'lower')
        <h1>小文字に変換</h1>
    @endif
    <p>
        {{ $word_tfm }}
    </p>
</div>
