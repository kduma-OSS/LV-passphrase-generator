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
    protected bool $diceware = true;

    /**
     * @var bool If true no words are capitalized or changed to lower case (words are not modified)
     */
    protected bool $modifiers = false;

    /**
     * @var int entropy used to generate passphrase (must be between 26.0 and 120.0 bits)
     */
    protected int $entropy = 50;

    /**
     * @var string separators (one ore more)
     */
    protected string $separators = '-';

    /**
     * Set word list to diceware
     */
    public function useDicewareWordList(): PassphraseGenerator
    {
        $clone = clone $this;
        
        $clone->diceware = true;
        
        return $clone;
    }

    /**
     * Set word list to english
     */
    public function useEnglishWordList(): PassphraseGenerator
    {
        $clone = clone $this;
        
        $clone->diceware = false;
        
        return $clone;
    }

    /**
     * Don't use modifiers
     *
     * @return PassphraseGenerator
     */
    public function dontUseModifiers(): PassphraseGenerator
    {
        $clone = clone $this;
        
        $clone->modifiers = true;
        
        return $clone;
    }

    /**
     * Use modifiers
     *
     * @return PassphraseGenerator
     */
    public function useModifiers(): PassphraseGenerator
    {
        $clone = clone $this;
        
        $clone->modifiers = false;
        
        return $clone;
    }

    /**
     * set amount of entropy
     *
     * @param int $entropy
     * @return PassphraseGenerator
     */
    public function setEntropy(int $entropy): PassphraseGenerator
    {
        $clone = clone $this;
        
        $clone->entropy = $entropy;
        
        return $clone;
    }

    /**
     * set separators
     *
     * @param string $separators
     * @return PassphraseGenerator
     */
    public function setSeparators(string $separators): PassphraseGenerator
    {
        $clone = clone $this;
        
        $clone->separators = $separators;
        
        return $clone;
    }

    /**
     * generate and return passphrase
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