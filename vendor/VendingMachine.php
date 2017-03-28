<?php


class VendingMachine
{
    const DEFAULT_PRICE = 50;
    const ABC = '';

    public  $credit = 0;
    private $price;

    public function __construct($price = self::DEFAULT_PRICE)
    {
        self::DEFAULT_PRICE;
        $this->price = $price;
        $this->reset();
    }

    private function reset()
    {
        $this->credit = 0;
        printf(
            "\nPrice for coffee: %d coin(s)\n",
            $this->price
        );
    }

    private function eachCoin()
    {
        while (
            printf("Please, set coin:\n") &&
            ($coin = (int) fgets(STDIN))
        ) {
            yield $coin;
        }
    }

    public function go()
    {

        foreach ($this->eachCoin() as $coin) {
            var_dump($this->eachCoin());
            $this->credit += $coin;
            if ($this->credit >= $this->price) {
                $this->purchase();
                if ($this->credit > 0) {
                    $this->returnChange($this->credit);
                }
                $this->reset();
            } else {
                printf(
                    "Need %d coin(s)\n",
                     $this->price - $this->credit
                );
            }
        }
        echo "It is not coin...\n";
    }

    private function returnChange($change)
    {
        printf("Your change: %d coin(s)\n", $change);
    }

    private function purchase()
    {
        $this->credit -= $this->price;
        echo "Wait, your coffee is mading...\n";
        sleep(3);
        echo "Your coffee is ready, good day\n";
    }
}