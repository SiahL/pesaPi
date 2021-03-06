<?php
/*	Copyright (c) 2011-2013, PLUSPEOPLE Kenya Limited. 
		All rights reserved.

		Redistribution and use in source and binary forms, with or without
		modification, are permitted provided that the following conditions
		are met:
		1. Redistributions of source code must retain the above copyright
		   notice, this list of conditions and the following disclaimer.
		2. Redistributions in binary form must reproduce the above copyright
		   notice, this list of conditions and the following disclaimer in the
		   documentation and/or other materials provided with the distribution.
		3. Neither the name of PLUSPEOPLE nor the names of its contributors 
		   may be used to endorse or promote products derived from this software 
		   without specific prior written permission.
		
		THIS SOFTWARE IS PROVIDED BY THE REGENTS AND CONTRIBUTORS ``AS IS'' AND
		ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
		IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
		ARE DISCLAIMED.  IN NO EVENT SHALL THE REGENTS OR CONTRIBUTORS BE LIABLE
		FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
		DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS
		OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION)
		HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
		LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY
		OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
		SUCH DAMAGE.

		File originally by Michael Pedersen <kaal@pluspeople.dk>
 */
namespace PLUSPEOPLE\PesaPi\MpesaPrivate;

class Transaction extends \PLUSPEOPLE\PesaPi\Base\Transaction {
	// Extended attributes
	const MPESA_PRIVATE_PAYMENT_RECEIVED = 21;
	const MPESA_PRIVATE_PAYMENT_SENT = 22;
	const MPESA_PRIVATE_DEPOSIT = 23;
	const MPESA_PRIVATE_WITHDRAW = 24;
	const MPESA_PRIVATE_WITHDRAW_ATM = 25;
	const MPESA_PRIVATE_PAYBILL_PAID = 26;
	const MPESA_PRIVATE_BUY_GOODS = 27;
	const MPESA_PRIVATE_AIRTIME_YOU = 28;
	const MPESA_PRIVATE_AIRTIME_OTHER = 29;
	const MPESA_PRIVATE_UNKNOWN = 30;
	const MPESA_PRIVATE_B2C_RECEIVED = 31;
	const MPESA_PRIVATE_BALANCE_REQUEST = 32;
	const MPESA_PRIVATE_ERROR = 33;
	const MPESA_PRIVATE_BUYGOODS_RECEIVED = 34;
	const MPESA_PRIVATE_TO_MSHWARI = 35;
	const MPESA_PRIVATE_FROM_MSHWARI = 36;

}

?>