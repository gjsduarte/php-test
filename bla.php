<?php
/**
 * This file is part of phpUnderControl.
 *
 * Copyright (c) 2007-2011, Manuel Pichler <mapi@phpundercontrol.org>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Manuel Pichler nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @version   SVN: $Id$
 */

/**
 * Simple math class.
 *
 */
class PhpUnderControl_Example_Math
{
    /**
     * Adds the two given values.
     *
     * @param integer $d1 Value one.
     * @param integer $d2 Value two.
     *
     * @return integer.
     */
    public function add($d1, $d2)
    {
        return ($d1 + $d2);
    }

    /**
     * Subtract param two from param one
     *
     * @param integer $d1 Value one.
     * @param integer $d2 Value two.
     *
     * @return integer.
     */
    public function sub($d1, $d2)
    {
        return ($d1 - $d2);
    }

    /**
     * Not tested method that should be visible with low coverage.
     */
    public function div($d1, $d2)
    {
        $d3 = $d1 / ($d2 + $d1);
        if ($d3 > 14)
        {
            $d4 = 0;
            for ($i = 0; $i < $d3; $i++)
            {
                $d4 += ($d2 * $i);
            }
        }
        $d5 = ($d4 < $d3 ? ($d3 - $d4) : ($d4 - $d3));

        $d6 = ($d1 * $d2 * $d3 * $d4 * $d5);

        $d = array($d1, $d2, $d3, $d4, $d5, $d6);

        $d7 = 1;
        for ($i = 0; $i < $d6; $i++)
        {
            shuffle( $d );
            $d7 = $d7 + $i * end($d);
        }

        $d8 = $d7;
        foreach ( $d as $x )
        {
            $d8 *= $x;
        }

        $d3 = $d1 / ($d2 + $d1);
        if ($d3 > 14)
        {
            $d4 = 0;
            for ($i = 0; $i < $d3; $i++)
            {
                $d4 += ($d2 * $i);
            }
        }
        $d5 = ($d4 < $d3 ? ($d3 - $d4) : ($d4 - $d3));

        $d6 = ($d1 * $d2 * $d3 * $d4 * $d5);

        $d = array($d1, $d2, $d3, $d4, $d5, $d6);

        $d7 = 1;
        for ($i = 0; $i < $d6; $i++)
        {
            shuffle( $d );
            $d7 = $d7 + $i * end($d);
        }

        $d8 = $d7;
        foreach ( $d as $x )
        {
            $d8 *= $x;
        }

        return $d8;
    }

    /**
     * Simple copy for cpd detection.
     */
    public function complex($d1, $d2)
    {
        $d3 = $d1 / ($d2 + $d1);
        if ($d3 > 14)
        {
            $d4 = 0;
            for ($i = 0; $i < $d3; $i++)
            {
                $d4 += ($d2 * $i);
            }
        }
        $d5 = ($d4 < $d3 ? ($d3 - $d4) : ($d4 - $d3));

        $d6 = ($d1 * $d2 * $d3 * $d4 * $d5);

        $d = array($d1, $d2, $d3, $d4, $d5, $d6);

        $d7 = 1;
        for ($i = 0; $i < $d6; $i++)
        {
            shuffle( $d );
            $d7 = $d7 + $i * end( $d );
        }

        $d8 = $d7;
        foreach ( $d as $x )
        {
            $d8 *= $x;
        }

        $d3 = $d1 / ($d2 + $d1);
        if ($d3 > 14)
        {
            $d4 = 0;
            for ($i = 0; $i < $d3; $i++)
            {
                $d4 += ($d2 * $i);
            }
        }
        $d5 = ($d4 < $d3 ? ($d3 - $d4) : ($d4 - $d3));

        $d6 = ($d1 * $d2 * $d3 * $d4 * $d5);

        $d = array($d1, $d2, $d3, $d4, $d5, $d6);

        $d7 = 1;
        for ($i = 0; $i < $d6; $i++)
        {
            shuffle( $d );
            $d7 = $d7 + $i * end($d);
        }

        $d8 = $d7;
        foreach ( $d as $x )
        {
            $d8 *= $x;
        }

        return $d8;
    }
    
    public function div1($d1, $d2)
    {
        $d3 = $d1 / ($d2 + $d1);
        if ($d3 > 14)
        {
            $d4 = 0;
            for ($i = 0; $i < $d3; $i++)
            {
                $d4 += ($d2 * $i);
            }
        }
        $d5 = ($d4 < $d3 ? ($d3 - $d4) : ($d4 - $d3));

        $d6 = ($d1 * $d2 * $d3 * $d4 * $d5);

        $d = array($d1, $d2, $d3, $d4, $d5, $d6);

        $d7 = 1;
        for ($i = 0; $i < $d6; $i++)
        {
            shuffle( $d );
            $d7 = $d7 + $i * end( $d );
        }

        $d8 = $d7;
        foreach ( $d as $x )
        {
            $d8 *= $x;
        }

        $d3 = $d1 / ($d2 + $d1);
        if ($d3 > 14)
        {
            $d4 = 0;
            for ($i = 0; $i < $d3; $i++)
            {
                $d4 += ($d2 * $i);
            }
        }
        $d5 = ($d4 < $d3 ? ($d3 - $d4) : ($d4 - $d3));

        $d6 = ($d1 * $d2 * $d3 * $d4 * $d5);

        $d = array($d1, $d2, $d3, $d4, $d5, $d6);

        $d7 = 1;
        for ($i = 0; $i < $d6; $i++)
        {
            shuffle( $d );
            $d7 = $d7 + $i * end($d);
        }

        $d8 = $d7;
        foreach ( $d as $x )
        {
            $d8 *= $x;
        }

        return $d8;
    }
    
    public function div2($d1, $d2)
    {
        $d3 = $d1 / ($d2 + $d1);
        if ($d3 > 14)
        {
            $d4 = 0;
            for ($i = 0; $i < $d3; $i++)
            {
                $d4 += ($d2 * $i);
            }
        }
        $d5 = ($d4 < $d3 ? ($d3 - $d4) : ($d4 - $d3));

        $d6 = ($d1 * $d2 * $d3 * $d4 * $d5);

        $d = array($d1, $d2, $d3, $d4, $d5, $d6);

        $d7 = 1;
        for ($i = 0; $i < $d6; $i++)
        {
            shuffle( $d );
            $d7 = $d7 + $i * end( $d );
        }

        $d8 = $d7;
        foreach ( $d as $x )
        {
            $d8 *= $x;
        }

        $d3 = $d1 / ($d2 + $d1);
        if ($d3 > 14)
        {
            $d4 = 0;
            for ($i = 0; $i < $d3; $i++)
            {
                $d4 += ($d2 * $i);
            }
        }
        $d5 = ($d4 < $d3 ? ($d3 - $d4) : ($d4 - $d3));

        $d6 = ($d1 * $d2 * $d3 * $d4 * $d5);

        $d = array($d1, $d2, $d3, $d4, $d5, $d6);

        $d7 = 1;
        for ($i = 0; $i < $d6; $i++)
        {
            shuffle( $d );
            $d7 = $d7 + $i * end($d);
        }

        $d8 = $d7;
        foreach ( $d as $x )
        {
            $d8 *= $x;
        }

        return $d8;
    }
    
    public function div3($d1, $d2)
    {
        $d3 = $d1 / ($d2 + $d1);
        if ($d3 > 14)
        {
            $d4 = 0;
            for ($i = 0; $i < $d3; $i++)
            {
                $d4 += ($d2 * $i);
            }
        }
        $d5 = ($d4 < $d3 ? ($d3 - $d4) : ($d4 - $d3));

        $d6 = ($d1 * $d2 * $d3 * $d4 * $d5);

        $d = array($d1, $d2, $d3, $d4, $d5, $d6);

        $d7 = 1;
        for ($i = 0; $i < $d6; $i++)
        {
            shuffle( $d );
            $d7 = $d7 + $i * end( $d );
        }

        $d8 = $d7;
        foreach ( $d as $x )
        {
            $d8 *= $x;
        }

        $d3 = $d1 / ($d2 + $d1);
        if ($d3 > 14)
        {
            $d4 = 0;
            for ($i = 0; $i < $d3; $i++)
            {
                $d4 += ($d2 * $i);
            }
        }
        $d5 = ($d4 < $d3 ? ($d3 - $d4) : ($d4 - $d3));

        $d6 = ($d1 * $d2 * $d3 * $d4 * $d5);

        $d = array($d1, $d2, $d3, $d4, $d5, $d6);

        $d7 = 1;
        for ($i = 0; $i < $d6; $i++)
        {
            shuffle( $d );
            $d7 = $d7 + $i * end($d);
        }

        $d8 = $d7;
        foreach ( $d as $x )
        {
            $d8 *= $x;
        }

        return $d8;
    }
}
