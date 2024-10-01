<?php
$lorem_ipsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem reprehenderit nobis veritatis commodi fugiat molestias impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum quisquam? Quos impedit eum nulla optio.";

echo "<p>{$lorem_ipsum}</p>";
echo "Panjang karakter adalah " . strlen($lorem_ipsum) . "<br />";
echo "Panjang kata adalah " . str_word_count($lorem_ipsum) . "<br />";
echo "<p>" . strtoupper($lorem_ipsum) . "</p>";
echo "<p>" . strtolower($lorem_ipsum) . "</p>";