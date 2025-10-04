<?php

use function Livewire\Volt\{state, mount};

state(['word', 'word_reverse']);

mount(function () {
    $this->word_reverse = strrev($this->word);
});
?>

<div>
    <h1>元の値</h1>
    <p>
        {{ $word }}
    </p>
    <h1>反転文字列に変換</h1>
    <p>
        {{ $word_reverse }}
    </p>
</div>
