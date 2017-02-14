<?php

namespace LasseRafn\Initials;

class Initials
{
    private $parameter_length = 2;
    private $parameter_initials = 'JD';
    private $parameter_name = 'John Doe';

    /**
     * Set the name used for generating initials.
     *
     * @param string $nameOrInitials
     *
     * @return Initials
     */
    public function name(string $nameOrInitials): self
    {
        $this->parameter_name = $nameOrInitials;
        $this->parameter_initials = $this->generateInitials();

        return $this;
    }

    /**
     * Set the length of the generated initials.
     *
     * @param int $length
     *
     * @return Initials
     */
    public function length(int $length = 2): self
    {
        $this->parameter_length = (int) $length;
        $this->parameter_initials = $this->generateInitials();

        return $this;
    }

    /**
     * Generate the initials.
     *
     * @param null|string $name
     *
     * @return string
     */
    public function generate($name = null): string
    {
        if ($name !== null) {
            $this->parameter_name = $name;
            $this->parameter_initials = $this->generateInitials();
        }

        return (string) $this;
    }

    /**
     * Will return the generated initials.
     *
     * @return string
     */
    public function getInitials(): string
    {
        return $this->parameter_initials;
    }

	/**
	 * Return the initials.
	 *
	 * @return string
	 */
    public function __toString()
    {
        return $this->getInitials();
    }

    /**
     * Generate a two-letter initial from a name,
     * and if no name, assume its already initials.
     * For safety, we limit it to two characters,
     * in case its a single, but long, name.
     *
     * @return string
     */
    private function generateInitials(): string
    {
        $nameOrInitials = mb_strtoupper(trim($this->parameter_name));
        $names = explode(' ', $nameOrInitials);
        $initials = $nameOrInitials;
        $assignedNames = 0;

        if (count($names) > 1) {
            $initials = '';
            $start = 0;

            for ($i = 0; $i < $this->parameter_length; $i++) {
                $index = $i;

                if (($index === ($this->parameter_length - 1) && $index > 0) || ($index > (count($names) - 1))) {
                    $index = count($names) - 1;
                }

                if ($assignedNames >= count($names)) {
                    $start++;
                }

                $initials .= mb_substr($names[$index], $start, 1);
                $assignedNames++;
            }
        }

        $initials = mb_substr($initials, 0, $this->parameter_length);

        return $initials;
    }
}
