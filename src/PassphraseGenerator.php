<?php
namespace KDuma\PassphraseGenerator;
use GenPhrase\Password;


/**
 * Class PassphraseGenerator
 * @package KDuma\PassphraseGenerator
 */
class PassphraseGenerator
{
    /**
     * @var bool use diceware word list instead of english word list
     */
    protected $diceware = true;

    /**
     * @var bool If true no words are capitalized or changed to lower case (words are not modified)
     */
    protected $modifiers = false;

    /**
     * @var int entropy used to generate passphrase (must be between 26.0 and 120.0 bits)
     */
    protected $entropy = 50;

    /**
     * @var string separators (one ore more)
     */
    protected $separators = '-';

    /**
     * Set word list to diceware
     *
     * @return PassphraseGenerator
     */
    public function useDicewareWordList(): PassphraseGenerator
    {
        $this->diceware = true;
        return $this;
    }

    /**
     * Set word list to english
     *
     * @return PassphraseGenerator
     */
    public function useEnglishWordList(): PassphraseGenerator
    {
        $this->diceware = false;
        return $this;
    }

    /**
     * Don't use modifiers
     *
     * @return PassphraseGenerator
     */
    public function dontUseModifiers(): PassphraseGenerator
    {
        $this->modifiers = true;
        return $this;
    }

    /**
     * Use modifiers
     *
     * @return PassphraseGenerator
     */
    public function useModifiers(): PassphraseGenerator
    {
        $this->modifiers = false;
        return $this;
    }

    /**
     * set amount of entropy
     *
     * @param int $entropy
     * @return PassphraseGenerator
     */
    public function setEntropy(int $entropy): PassphraseGenerator
    {
        $this->entropy = $entropy;
        return $this;
    }

    /**
     * set separators
     *
     * @param string $separators
     * @return PassphraseGenerator
     */
    public function setSeparators(string $separators): PassphraseGenerator
    {
        $this->separators = $separators;
        return $this;
    }

    /**
     * generate and return passphrase
     *
     * @return string
     */
    public function get(): string
    {
        $gen = new Password();

        if($this->diceware){
            $gen->removeWordlist('default');
            $gen->addWordlist('diceware.lst', 'diceware');
        }

        $gen->disableWordModifier($this->modifiers);
        $gen->alwaysUseSeparators(true);
        $gen->setSeparators($this->separators);

        return $gen->generate($this->entropy);
    }
}